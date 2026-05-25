<?php


$con = mysqli_connect('localhost', 'root', '', 'car');
if (!$con){
  die("connection failed : ".mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car = $_POST['car'];
$pickup = date("Y-m-d H:i:s", strtotime($_POST['pickup']));
$return = date("Y-m-d H:i:s", strtotime($_POST['return']));

$sql = "INSERT INTO booking VALUES ('$name', '$email', '$phone', '$car','$pickup','$return')";

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