
<html>
<body>
<head>
<style>
.error{color:grey;}
</style>
</head>
<!--
Welcome <?php echo $_POST["name"];?> <br> 
<br>
Your e-mail address is : <?php echo $_POST["email"]; ?>
</body>
</html>
-->



<?php
$nameErr= $emailErr= $genderErr= $commentErr = $websiteErr ="";
$name= $email= $gender= $comment = $website ="";


if($_SERVER["REQUEST_METHOD"]=="POST") {
  if(empty($POST["name"])){
	$nameErr="Name is requires";
} else {
$name=test_input($_POST["name"]);
}

  if(empty($POST["email"])){
	$emailErr="email is  requires";
} else {
$email=test_input($_POST["email"]);
}

  if(empty($POST["website"])){
	$websiteErr="website  is requires";
} else {
$website=test_input($_POST["website"]);
}

  if(empty($POST["comment"])){
	$commentErr="comment is requires";
} else {
$comment=test_input($_POST["comment"]);
}

  if(empty($POST["gender"])){
	$genderErr="gender is requires";
} else {
$gender=test_input($_POST["gender"]);
}
}

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
<h2> php form Validation </h2>
<form method ="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type= "text" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
Website:<input type="text" name="website">
<span class="error">*<?php echo $websiteErr;?></span>
<br><br>
Comment : <textarea name="comment" rows="5" cols="40"> </textarea>
<span class="error">*<?php echo $commentErr;?></span>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="Others">Others

<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2> your input :</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>
</body>
</html>
