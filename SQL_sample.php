<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name='sample_2';

/*$con=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) 
or
die("Error connecting to the database".mysqli_connect_error($con));
//echo "sucess";
//$sql="CREATE DATABASE sample_2";
//if(mysqli_query($con,$sql)){
//echo "Database created sucessfully with the name sample_2";
//}
//else {
//echo "Errors creating database:".mysqli_error($con);
//}
//mysqli_close($con);
//$sql ="CREATE TABLE Student(firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,age INT(2))";

if(mysqli_query($con,$sql)){
echo "Table created sucessfully with the name sample_2";
}
else {
echo "Errors creating Table:".mysqli_error($con);
}
mysqli_close($con);
*/

$link= mysqli_connect("localhost","root","root","sample_2");
if($link==false){
die("Error could not connect to database".mysqli_connect_error($con));
}
/*$sql="INSERT INTO student(firstname,lastname,age) VALUES('ram','singh','21')";
if (mysqli_query($link,$sql))
{
echo "record inserted sucessfully";
}
else{
echo "Errors insrting data:".mysqli_error($con);
}
*/

$sql="SELECT * FROM Student";
if ($res =mysqli_query($link,$sql)){
if (mysqli_num_rows($res)>0){
echo "<table>";
echo"<tr>";
echo "<th> firstname </th>";
echo "<th> lastname </th>";
echo "<th> age </th>";
echo "</tr>";


while($row=mysqli_fetch_array($res)){
echo "<tr>";
echo
"<td>".$row["firstname"]."</td>";
echo
"<td>".$row["lastname"]."</td>";
echo
"<td>".$row["age"]."</td>";
}
echo "</table>";
mysqli_free_res($res);
}
}
?>
