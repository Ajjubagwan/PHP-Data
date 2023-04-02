<?php
include('db.php');
if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$query = "insert into employee(name,email,phone) values('$name','$email','$phone')";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:fetch.php");
}
}
?>