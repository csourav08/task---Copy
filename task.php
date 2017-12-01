<?php
include("include/db.php");



// $con = db();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Test Task</title>
<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Zeyada" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet"
</head>
<body>

	<!-- NAVBAR -->
   
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Electronics Shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">

          	<?php
          	$get_cats = "select * from categories";
          	$run_cats = mysqli_query($con, $get_cats);
          	while ($row_cats=mysqli_fetch_array($run_cats)) {
          		# code...
          	$cat_id = $row_cats['cat_id'];
          	$cat_title = $row_cats['cat_title'];
            
           echo "<li><a href='task.php?cat=$cat_id'>$cat_title</a>
            	       </li>"
;
            	   }
            	   ?>
            
            <li><a href="#">Video</a></li>
            <li><a href="#">Picture</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Go To Home</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Go To About Us</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Click</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Add to cart</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">History</a></li>
            <li><a href="#">Upcoming</a></li>
            <li><a href="#">Stay Connected</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Feedback</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- END NAVBAR -->

<div class="container">
	<div class="jumbotron">
		<h1 class="font"><span>It's an "Add to cart" kinda day!</span></h1>
		<p class="font">Because it's shop O' clock somewhere</p>
		<!-- <button class="btn btn-success btn-lg,">Select</button> -->
	</div>
    
	<h1 class="font1"><strong>Choose Items</strong></h1>
	<div class="test">
	<button class="btn btn-success btn-default">Electronics</button>
	<button class="btn btn-success btn-default">Video</button>
	<button class="btn btn-success btn-default" active>Photo</button>
    </div>
	<!-- <a href="http://www.getbootstrap.com" class="btn btn-success btn-xs">Bootstrap Docs</a> -->

<!-- 	.form-group
	.form-control -->

	<form>
	  <div class="form-group">
	    <label for="Search">Enter Product Name</label>
	    <input type="Search" class="form-control" id="Search" placeholder="Products">
	  </div>
	</form>
	  
</body>
</html>