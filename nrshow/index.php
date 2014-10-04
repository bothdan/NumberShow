<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>DISPLAY</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="refresh" content="5">
</head>
<body>
<?php
$file = 'nr.txt';
// Open the file to get existing content
$current = file_get_contents($file);
?>
<div id="div_display">
<?php 
echo "Now serving: #".$current;
?>
</div>
</body>
</html>