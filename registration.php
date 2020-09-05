<?php
/*
Author: Sajibe Kanti
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		/*$username = stripslashes($username);
		//$username = mysqli_real_escape_string($username);
		$email = stripslashes($email);
		//$email = mysqli_real_escape_string($email);
		$password = stripslashes($password);
		//$password = mysqli_real_escape_string($password);*/
		
        $query = "INSERT into `users`  VALUES (DEFAULT,'$username', '$email','".md5($password)."')";
        $result = mysqli_query($connection ,$query);
        //echo $query;
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
