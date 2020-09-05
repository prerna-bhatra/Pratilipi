<?php
require('db.php');
$id=$_GET['id'];
//echo $id;
include("auth.php");
$username=$_SESSION['username'];
//echo $_SESSION['username'];
$query = "SELECT * FROM `counts` WHERE user='$username' AND story_id='$id'";
		$result = mysqli_query($connection,$query);
		$rows = mysqli_num_rows($result);
		$row = $result->fetch_assoc();
		//echo $row['user'];
		if($rows<1)
		{
			
			$query = "INSERT into `counts`  VALUES (DEFAULT,'$username', '$id')";
			echo $query;
       		$result2 = mysqli_query($connection ,$query);
		}
		

?>
<!DOCTYPE html>
<html>
<head>
	<title>StoryPage</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.navbar-nav li  a
    {
      color: white;
      text-decoration: none;
    }
    body
    {
    	
    	color:white;
    }
    .row
    {
    	background: black;
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-md " id="navbarid" style="background-color: #00c6c6">
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
	<?php
	$query = "SELECT * FROM `story` WHERE id=$id ";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();
    $query1=mysqli_query($connection,"SELECT *  from `counts` WHERE story_id='$id'");
    $rows = mysqli_num_rows($query1);
	?>
	<div class="container">
		<div class="row" style="border:5px solid white;margin-top: 20px;">
			<div class="col-md-8" style="border-right: 3px solid white">
				<center><h3><?php echo $row['title'] ?></h3></center>
				<p>
					<?php echo $row['desp']  ?>
				</p>
			</div>
			<div class="col-md-4">
				Reda Counts
				<i class="fa fa-eye"></i>

				<?php echo $rows;  ?>
					<P>Viewers</P>
				<?php while ($row = $query1->fetch_assoc()) {
											
				?>
			<?php echo $row['user']."\n"; ?>
			<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>


