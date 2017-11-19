<?php
require("settings.php");

$json = json_decode(file_get_contents("index.json"), true);
$index = array_rand($json);

if ($item['disapproval'] < rand(0, 100)) {
  // reload
}
$markdown = file_get_contents(CONTENTS_DIR.$json[$index]['content']);
?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>TIPS SIGNAGE</title>
  <script src="js/ios_debug_js.js"></script>
  <script src="js/marked.min.js"></script>
</head>
<body>
  <div id='md'></div>
  <script>
    document.getElementById('md').innerHTML = marked(`<?= $markdown ?>`);

    function reload() {
      location.href = "index.php";
    }
    setTimeout("reload()", <?= RELOAD_MIN ?>*60000);
  </script>
</body>
</html>