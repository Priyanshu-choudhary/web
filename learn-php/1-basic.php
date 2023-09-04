<!DOCTYPE html>
<html>
<body>

<?php
$txt1 = "Hello world!";
$x = 5;
$y = 10.5;
$txt = "PHP";
echo  "<h1>I love $txt!</h1><br>";
echo "variable $txt1 <br>";
echo "variable 2 $x";
echo "$y";
/////////////////////////////////

var_dump($x);
var_dump($y);
///////////////////////////////

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "<br>$z <br>";

//////////////////////////////////
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>
