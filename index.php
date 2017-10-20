<?php
define("CONTENTS_DIR","contents/");
$json = json_decode(file_get_contents("index.json"), true);
$item = array_rand($json);

if ($content['disapproval'] < rand(0, 100)) {
  // reload
}

$markdown = file_get_contents(CONTENTS_DIR.$item['content']);
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>TIPS SIGNAGE</title>
	<script src="js/marked.min.js">document.getElementById("markdown").innerHTML = marked();</script>
</head>
<body>
	<div id="markdown"></div>
	<?php echo $markdown; ?>
</body>
</html>