<?php
$conn = mysqli_connect("localhost","root","","wallpapers");
$name = $_POST['Uname'];
$pass = $_POST['Pword'];
$sql = "SELECT * FROM sinup WHERE username='$name' AND password='$pass'";

$sql1 = mysqli_query($conn,$sql);
$name2=['$sql1'];
session_start();
$_SESSION['name3']=$name;

$sql2 = mysqli_num_rows($sql1);
if($sql2==1){
    echo "login success";
    header('location:second.php');
}
else{
    echo "login faild";
}




?>