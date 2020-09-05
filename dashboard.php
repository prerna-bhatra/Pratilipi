<?php
/*
Author: Sajibe Kanti
*/
?>

<?php 
require('db.php');
//include("auth.php"); //include auth.php file on all secure pages ?>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['story'])){
        $title = $_POST['title'];
		$descp = $_POST['desc'];
       // $img = $_POST['img'];
		/*$username = stripslashes($username);
		//$username = mysqli_real_escape_string($username);
		$email = stripslashes($email);
		//$email = mysqli_real_escape_string($email);
		$password = stripslashes($password);
		//$password = mysqli_real_escape_string($password);*/
		//echo $title;
        $query = "INSERT into `story`  VALUES (DEFAULT,'$title', '$descp')";
        $result = mysqli_query($connection ,$query);
       // echo $query;
        if($result){
          echo "<script>
		window.location.href='dashboard.php';
		alert('Your story published succefully');
		</script>"; 
        }
        else
        {
        	echo "<script>
		window.location.href='dashboard.php';
		alert('Word limit exceed');
		</script>"; 	
        }
    }else{
    }
?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To Pratilipi</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md " id="navbarid" style="background-color: #f9c7cd">
  <a class="navbar-brand" href="index.php"><img style="width:60px;" src="log.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Create</a>
      </li>   
       
      <li>
      <a class="nav-link"  href="logout.php" class="btn btn-dark">Logout</a> 
  		</li>
    </ul>
  </div>  
</nav>
<div class="container">
<h1>Publichs Unlimited Stories Free</h1>
	<div class="row">
			<form action="" method="post">
				<div>
				<label>Titile</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div>
				<label>Description</label><br>
				<textarea name="desc"></textarea>
			</div>
			<!--<div>
				<label>Cover Photo</label><br>
				<input type="file" name="img">
			</div>-->
			<div>
				<input type="submit" name="story">
			</div>
			</form>
		
	</div>
</div>
</body>
</html>


