<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Your Settings</title>
	<style type="text/css">
	body {
<?php // Check Font Size Settings
if (isset($_COOKIE['font_size'])) {
	print "\t\tgont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
} else {
	print "\t\tfont-size: medium;";
}
// Check Font Color Settings
if (isset($_COOKIE['font_color'])) {
	print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
} else {
	print "\t\tcolor: #000;";
}
?>
	}
	</style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings<a/></p>

<p>Check out my awesome font size and colour settings!</p>
<p>This is all done through the use of Cookie</p>
</body>
</html>