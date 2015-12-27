<?php
function scandir_folders($d, $blacklist = array('.', '..')) {
	return array_filter(scandir($d), function ($f) use($d, $blacklist) {
		return is_dir($d . DIRECTORY_SEPARATOR . $f) && !in_array($f, $blacklist);
	});
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UMaine Classes</title>
		<style>
			body {
				font-family: Verdana, Geneva, sans-serif;
			}
		</style>
	</head>
	<body>

		<h1>Umaine Classes</h1>

		<ul>
		<?php
		foreach (scandir_folders('./') as $folder) {
			echo "\t<li><a href=\"".$folder."\">".strtoupper($folder)."</a></li>";
		}
		?>
		</ul>


	</body>
</html>

