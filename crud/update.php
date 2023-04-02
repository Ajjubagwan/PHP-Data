<?php
include('db.php');
if(isset($_POST['update'])){
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$query = "update employee set name='$name', email='$email', phone='$phone' where id='$id'";
$result = mysqli_query($conn,$query);
if($result){

    header('LOCATION:fetch.php');
}
else{
    echo "data is not updated due to the error of".mysqli_error($conn);
    
}
}
?>