<?php


$con = mysqli_connect('localhost', 'root', '', 'car');
if (!$con){
  die("connection failed : ".mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO review (name, email, message) VALUES ('$name', '$email', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}else {
  echo "error : " .mysqli_error($con);
}
mysqli_close($con);
?>

