<?php
$nameErr = $emailErr = $passErr = $cpassErr = "";
$name = $email = $pass = $cpass = $website = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

//name
	if(empty($_POST["uname"]))
	{
		$nameErr="Name is required";
	}
	else
	{
		$name=test_input($_POST["uname"]);
	}
//email
	if(empty($_POST["email"]))
	{
		$emailErr="Email is required";
	}
	else
	{
		$email=test_input($_POST["email"]);
	}
//password
	if(empty($_POST["pass"]))
	{
		$passErr="Password is required";
	}
	else
	{
		$pass=test_input($_POST["pass"]);
	}
//comfirm password
	if(empty($_POST["cpass"]))
	{
		$cpassErr="Password is required";
	}
	else
	{
		$cpass=test_input($_POST["cpass"]);
	}
//match the password
	if(($_POST["cpass"])==($_POST["pass"]))
	{
		$cpass=test_input($_POST["cpass"]);
	}
	else
	{
		$cpassErr="Password is not match";
	}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<head>
<title>bootstrap_demo1
</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<center>
<h1>Validation</h1>
<p><span class="error">* required field.</span></p>
		<form action="form_demo1.php" method="post">
			name <input type="text" name="uname"><span class="error">* <?php echo $nameErr;?></span><br><br>
			email <input type="email" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
			password <input type="password" name="pass"><span class="error">* <?php echo $passErr;?></span><br><br>
			comfirm password <input type="password" name="cpass"><span class="error">* <?php echo $cpassErr;?></span><br><br>
			<input type="submit" value="submit">
		</form>
</center>

</body>
</html>