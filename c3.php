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
        <a class="nav-link" href="view.php">View customers list <span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>
    
  </div>

</nav>
 <div class="main-div">
    <h1 class="text-center">Transfer Details   </h1>
<div class="center-div">
  <div class="table-responsive">
    <table><thead>
      <th>Sender Id</th>
      <th>Sender Name</th>
      <th>Receiver Id</th>
      <th>Receiver name</th>
      <th>Amount </th></thead>
<tbody>

   <?php
  include 'connection.php';
  $selectquery = "select * from transfer";

  $query = mysqli_query($con,$selectquery);

  $nums = mysqli_num_rows($query);

  while ($res = mysqli_fetch_array($query)) {
  ?>
    <tr>
    <td><?php echo $res['Sender_Id'];?></td>
    <td><?php echo $res['Sender_name'];?></td>
    <td><?php echo $res['Receiver_Id'];?></td>
    <td><?php echo $res['Receiver_name'];?></td>
    <td><?php echo $res['Amount'];?></td>
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