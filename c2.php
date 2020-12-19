

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
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="c3.php">View Transaction Details <span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>
    
  </div>




   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view.php">View Customers List<span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>
    
  </div>

</nav>

<?php

 include 'connection.php';

   
$Id1=$_POST['Sender1'];
  	$Id2=$_POST['Receiver1'];
     $Amount=$_POST['Amount'];
     $selectquery1 = "select  current_balance, name from Customers where Id=$Id1 ";
      $selectquery2 = "select   name from Customers where Id=$Id2 ";
      $row1 = mysqli_query($con,$selectquery1);
      $nums = mysqli_num_rows($row1);
$row2 = mysqli_query($con,$selectquery2);
$nums = mysqli_num_rows($row2);
 while ($res = mysqli_fetch_array($row1)){
 	$current=$res['current_balance'];
 	$SN=$res['name'];
 }
  while ($res = mysqli_fetch_array($row2)){
 	
 	$RN=$res['name'];
 }
 
  if((int) $current >=(int)$Amount){
  	 $sql1 =" UPDATE Customers  SET current_balance=current_balance- $Amount WHERE Id=$Id1";
      
       $query1 = mysqli_query($con,$sql1);
 

 
 
 
$sql2 = " UPDATE Customers  SET current_balance=current_balance + $Amount WHERE Id=$Id2";
       $query2 = mysqli_query($con,$sql2);
        

 
 

 $sql3 = "INSERT INTO transfer (Sender_Id,Sender_name, Receiver_Id,Receiver_name, Amount)
VALUES ('$Id1','$SN','$Id2','$RN', '$Amount')";  
 $query3 = mysqli_query($con,$sql3);
  
?>
 <h1 class="text-center" style="color: green" class="padding-3"> Transfer Succesful</h1>
<?php
  }
  else{
  	echo "Kindly make sure you have enough credit to transfer";}

  
  
  
?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="bg-dark" ><p class="p-15 bg-white text-center">@DevelopedbyMohdAmirParvez</p>
</footer>



</body>
</html>
