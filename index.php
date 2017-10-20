<?php
require("settings.php");

$json = json_decode(file_get_contents("index.json"), true);
$item = array_rand($json);

if ($item['disapproval'] < rand(0, 100)) {
  // reload
}

$markdown = file_get_contents(CONTENTS_DIR.$item['content']);
?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>TIPS SIGNAGE</title>
  <script src="js/marked.min.js">document.getElementById("markdown").innerHTML = marked(<?= $markdown; ?>);</script>
</head>
<body>
  <div id="markdown"></div>
</body>
</html>