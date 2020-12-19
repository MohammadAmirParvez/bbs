<!DOCTYPE html>
<html>
<head>
	<title></title>
<style >
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css">

 
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Bank of The States</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>
    
  </div>

</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\9.jpg" alt="#" width="1444" height="500">
      <div class="carousel-caption">
        <h3 style="font-size: 39px; color: green ">Bank of The States</h3>
        <p>A Bank which love you most</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\8.jpg" alt="#" width="1444" height="500">
      <div class="carousel-caption">
        <h3 style="font-size: 39px; color: black">Bank of The States</h3>
        <p>Your money in Good hands</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\7.jpg" alt="#" width="1444" height="500">
      <div class="carousel-caption">
        <h3 style="font-size: 39px; color: black">Bank of The States</h3>
        <p>Inspiring the world through Banking</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

 
  <div class="main-div">
  	<h1 class="text-center">List of all customers   </h1>
<div class="center-div">
	<div class="table-responsive">
		<table><thead>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Current balance</th>
			<th>Select </th></thead>
<tbody>
	 <?php
  include 'connection.php';
  $selectquery = "select * from Customers";

  $query = mysqli_query($con,$selectquery);

  $nums = mysqli_num_rows($query);

  while ($res = mysqli_fetch_array($query)) {
  ?>
  	<tr>
		<td><?php echo $res['Id'];?></td>
		<td><?php echo $res['name'];?></td>
		<td><?php echo $res['email'];?></td>
		<td><?php echo $res['current_balance'];?></td>
		<td><a href="c1.php?Id=<?php echo $res['Id'];?>"  data-toggle="tooltip" data-placement="top" title="View Customer"><i class="fa fa-edit " aria-hidden="true"></i></a></td>
	</tr>
 <?php 	
  }
  
	?>

</tbody>

		</table>
	</div>
</div>


  </div>

<footer class="bg-dark" ><p class="p-15 bg-white text-center">@DevelopedbyMohdAmirParvez</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script >
	$(document).ready(function()){
		$('[data-toggle="tooltip"]').tooltip();
	});
	}
</script>
</body>
</html> 
