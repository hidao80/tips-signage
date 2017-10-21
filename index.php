<?php
require("settings.php");

$json = json_decode(file_get_contents("index.json"), true);
//var_dump($json);
$index = array_rand($json);

if ($item['disapproval'] < rand(0, 100)) {
  // reload
}
//print_r($json[$index]['content']);
$markdown = file_get_contents(CONTENTS_DIR.$json[$index]['content']);
//print_r($markdown);
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
  <div id="markdown">
    <script>
      marked('<?= $markdown; ?>');
    </script>
  </div>
</body>
</html>