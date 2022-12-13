<?php
include('home.php');
if(isset($_POST['sid']))
{
	$name = $_POST['uid'];  
  $eid = $_POST['sid'];

  //$query1 = "update teacher set name = '$name' where tid = $x ";
  $reg12 = " insert into student(uid,sid) values('$name' , '$eid') ";
	mysqli_query($con,$reg12);
//   mysqli_query($con,$query1);
//   $query2 = "update teacher set email = '$email' where tid = $x ";
//   mysqli_query($con,$query2);
//   $query3 = "update teacher set phone = '$phone' where tid = $x ";
//   mysqli_query($con,$query3);
  $_SESSION['email'] = $email;
  header('location:dashboard.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<div class="container">
  <h4 style="padding-left: 450px;"><b> Enter the info :</b></h4>
  <br>
  <div class="container">
  <form action="extra1.php" method="post" class="form-example">

    <div class="form-group">
      <label >Enter your uid: </label>
      <input type="text" class="form-control" name="uid" required >
    </div>
    
    <div class="form-group">
      <label>Enter your sid:</label>
      <input type="text" class="form-control" name="sid" required>
    
    <button type="submit" class="btn btn-primary" onclick="alert('Data Saved !!')">Save</button>
  </form>
</div>
</div>
</body>
</html>