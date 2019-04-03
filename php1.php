<!--"Hello world " script in php
<html>
<head>
  <title> Hello world </title>
</head>
<body>
	<?echo "Hello, World";?>
</body>
</html>
-------------------------------------------------------------------------------------------------------------------------------------------------
-->

<!--
<html>
<body>
<?php
	$array=array(1,2,3,4,5);
	foreach($array as $value){
	echo "value is $value<br/>";
}
?>
</body>
</body>
-->

<html>
<body>
<!--<?php
	define("MINSIZE",50);
	echo MINSIZE;
	echo constant("MINSIZE");
?>
--------------------------------------------------------------------------------------------------------------------------------------------------
<?php
 $salaries=array("ankur"=>20000000,"jaggi"=>2000000,"sunil"=>232423321);
echo "salay of ankur ".$salaries["ankur"];
?>

<?php
$string1="hello World";
$string2="1234";
echo $string1."".$string2;
?>
----------------------------------------------------------------------------------------------------------------------------------------------------

<?php
if($_GET["name"] || $_GET["age"]) {
echo "welcome ".$_GET["name"]."<br/>";
echo "You are ".$_GET["age"]."years old";
exit();
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF?>"method="GET">
Name:<input type="text" name="name"/><br/>
<br/>
age: <input type ="num" name="phone_number" maxlength="2" pattern="[0-100]"/>
<input type="submit"/>
</form>
-------------------------------------------------------------------------------------------------------------------------------------------------
-->


<html>
<head>
	<title> Writting php function </title>
</head>

<body>
<!--
<?php
function writeMessage(){
echo "you are really nice person";
}
writeMessage();
?>
-------------------------------------------------------------------------------------------------------------------------------------------------

<?php
function addFunction($num1,$num2) {
$sum=$num1+$num2;
echo "sum of two number is :$sum";
}
addFunction(12,23);
?>
-------------------------------------------------------------------------------------------------------------------------------------------------
-->
 

<?php
function addFive($num){
$num +=5;
}
function addSix(&$num){
$num +=6;
}
$orignum=10;
addFive($orignum);
echo "original Value is  $orignum<br>";
addSix($orignum);
echo "original Value is  $orignum<br>";
?>

</body>
</html>
