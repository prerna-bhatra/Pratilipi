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
    .Welcome
    {
      background: black;
      color: white;
    } 
    .navbar-nav li  a
    {
      color: white;
      text-decoration: none;
    }
    .col-md-3
    {
      background: #00c6c6;
    }
     #row
     {
      border:2px solid black;
      padding: 20px 20px 20px 150px;
      background: black;
      margin-top: 20px;
     }
     .footer
     {
      padding: 20px 20px 20px 20px;
     }
     body
     {
      background: #00c6c6;
     }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-md " id="navbarid" style="background-color: #00c6c6;">
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
<div class="Welcome">
<center>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<marquee><p>Pratilipi is one of the largest libraries of stories on the internet, primarily teen-focused,Pratilipi is India's largest digital platform connecting readers and writers </p></marquee>
<img src="st.jpeg" >
</center>
</div>
<div class="container">
  <center><h3>Stroies for you</h3></center>
	<div class="row" id="row">
   <?php 
    $query = "SELECT * FROM `story` ";
    $result = $connection->query($query);
   /* $result = mysqli_query($connection,$query);
    $rows = mysqli_num_rows($result);*/
    while($row = $result->fetch_assoc()) {
   // echo "string";
    ?>
		<div class="col-md-3" style="margin: 20px 20px 20px 20px;border:1px solid black;">
      <h6><?php echo $row['title'] ?> </h6>
			<a  href="storypage.php?id=<?php echo $row['id'] ?>" ><center><img src="1.jpeg" style="height:300px;" ></center><</a>
		</div>
  <?php }  ?>
	</div>
</div>

<!--<div class="footer" style="background: #00c6c6;">
    <div class="row">
      <div class="col-md-2">
        kfjhbwdjkfh
      </div>
      <div class="col-md-2">
        kjdffs
      </div>
      <div class="col-md-2">
        hfbfhj
      </div>
    </div>
  </div>-->
</body>
</html>
