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
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="navbarid">
  <a class="navbar-brand" href="index.php"><img style="width:60px;" src="log.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Create</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Read Count</a>
      </li>   
      <li>
      <a class="nav-link"  href="logout.php" class="btn btn-dark">Logout</a> 
  		</li>
    </ul>
  </div>  
</nav>
<div class="container">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Pratilipi is one of the largest libraries of stories on the internet, primarily teen-focused. .</p>
<h1>Stories For You</h1>
	<div class="row">
    <?php 
    $query = "SELECT * FROM `story` ";
    $result = $connection->query($query);
   /* $result = mysqli_query($connection,$query);
    $rows = mysqli_num_rows($result);*/
    while($row = $result->fetch_assoc()) {
   // echo "string";
    ?>
		<div class="col-md-3" style="margin: 10px 10px 10px 10px;">
      <h3><?php echo $row['title'] ?></h3>
			<a  href="storypage.php?id=<?php echo $row['id'] ?>"><img src="1.jpg" ></a>
		</div>
  <?php }  ?>
	</div>
</div>
</body>
</html>
