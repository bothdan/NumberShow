<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>INPUT</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$file = 'nr.txt';
if (isset($_POST['textarea'])) 
{
$nr = $_POST["textarea"];
}else{
$nr = "";
};

echo "Now serving: ".$nr ;
file_put_contents($file, $nr);
?>
<form name="form1" method="post" action="input.php">
  <input type="text" name="textarea">
  <input type="submit" name="Submit" value="Go">
</form>
</body>
</html>
