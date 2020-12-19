<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
  


h2 {
  border: 1px solid red;
  outline: 2px  blue;
}input[type=submit]:hover {
  background-color: #45a049;
}

 .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
div.center {
  margin: 0;
  position: absolute;
  top: 60%;
  left: 35%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

 

</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script >
  function validateForm() {
     var y = document.forms["T"]["Receiver2"].value;
  var x = document.forms["T"]["Receiver1"].value;
   var z= document.forms["T"]["Amount"].value;
  if (x == "" ) {
    alert("Values Missing");
    return false;
  }
 if (y == "" ) {
    alert("Values Missing");
    return false;
  }
  if (z == "" ) {
    alert("Values Missing");
    return false;
  }
if (isNaN(x)) {
  alert("value not a number");
  return false;
}
  return true;
}

</script>
<script >
  function showdiv()
{
   document.getElementById("divCheckbox").style.visibility = "visible";
}
</script>
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
        <a class="nav-link text-center" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>
    
  </div>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view.php">View all Customers <span class="sr-only">(current)</span></a>
      </li>
      
      
  
    </ul>

    
  </div>
</nav>


    

   <?php
  include 'connection.php';

  $Id= $_GET['Id'];
  
  
  $selectquery = "select  * from Customers where Id=$Id ";
 $query = mysqli_query($con,$selectquery);

  $nums = mysqli_num_rows($query);

  while ($res = mysqli_fetch_array($query)) {
?><h1  class="text-center " > Customer's Details</h1>
  <h2 class="text-center">Customer Id:-<?php echo $res['Id'];?></h2>
   <h2 class="text-center"> Customer name:-<?php echo $res['name'];?></h2>
    <h2 class="text-center">Email:-<?php echo $res['email']; ?></h2>
   <h2 class="text-center" >Current balance:-<?php echo $res['current_balance'];?></h2>
 
<?php 
}    
  

  
 
?>
<?php  



  $Id= $_GET['Id'];
   $selectquery = "select  name from Customers where Id=$Id ";
 $query = mysqli_query($con,$selectquery);

  $nums = mysqli_num_rows($query);
 while( $res = mysqli_fetch_array($query)){
  $name=$res['name'];
  
}
  
   ?>
<div id="divCheckbox" style="visibility: hidden;" >
<form name="T" action="c2.php" class="text-center"  onsubmit="return validateForm()" method="post" >

  <input type="text" name="Sender1" id="Sender" value="<?php  echo $Id;?>" readonly ><br>
  <input type="text" name="Sender2" id="Sender"  value="<?php  echo $name;?>" readonly ><br>
  
  
  <input type="text" id="Receiver" name="Receiver1" placeholder="ID of Receiver" value=""><br>
  <input type="text" id="Receiver" name="Receiver2" placeholder="Name of Receiver" value=""><br>
  
  <input type="text" name="Amount"id="Amount"  placeholder="Amount" value="" ><br>

  <input type="submit" name="update" value="Submit" >
  

</form> </div>
 
  <div class="center"> 
<button type="button" class="button" onclick="showdiv()">Transfer</button>

  </div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="bg-dark" ><p class="p-15 bg-white text-center">@DevelopedbyMohdAmirParvez</p>
</footer>
</body>
</html>
