<?php
$index = file_get_contents("../index.json");
$content = array_rand($index, 1);
$json = decode_json($content, true);

if ($json['disapproval'] < rand(0, 100)) {
  // reload
}

$markdown = $json['content'];
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>TIPS SIGNAGE</title>
	<script src="../js/marked.min.js"></script>
</head>
<body>
	<div id="markdown">
	</div>
	<script>
		document.getElementById('markdown').innerHTML(marked(<?= $markdown; ?>));
	</script>
</body>
</html>