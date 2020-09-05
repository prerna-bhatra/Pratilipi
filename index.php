<?php
require('db.php');

?>

<?php include("auth.php"); //include auth.php file on all secure pages 
?>
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
  <style type="text/css">
    
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-md " id="navbarid" style="background-color: #f9c7cd;">
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
<center>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<marquee><p>Pratilipi is one of the largest libraries of stories on the internet, primarily teen-focused.</p></marquee>
<h1>Stories For You</h1>
</center>
	<div class="row" >
    <?php 
    $query = "SELECT * FROM `story` ";
    $result = $connection->query($query);
   /* $result = mysqli_query($connection,$query);
    $rows = mysqli_num_rows($result);*/
    while($row = $result->fetch_assoc()) {
   // echo "string";
    ?>
		<div class="col-md-3" style="margin: 10px 10px 10px 10px;">
      <h6><?php echo $row['title'] ?> </h6>
			<a  href="storypage.php?id=<?php echo $row['id'] ?>" ><img src="1.jpg" style="height:400px;" ></a>
		</div>
  <?php }  ?>
	</div>
</div>
</body>
</html>
