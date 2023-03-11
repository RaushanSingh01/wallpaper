<?php
$conn = mysqli_connect("localhost","root","","wallpapers");

$IMG = $_FILES['uplodes'];
$NAM = $_POST['Wall'];
$CAT = $_POST['cate'];

$filename = $_FILES['uplodes']['name'];
$filetmp = $_FILES['uplodes']['tmp_name'];
$filetype = $_FILES['uplodes']['type'];
$filesize = $_FILES['uplodes']['size'];
$pic = "uplodeimage/".$filename;
move_uploaded_file($filetmp,$pic);

$insert = "INSERT INTO `uplode` (IMAGE,NAME,CATEGORY) VALUES ('$pic','$NAM','$CAT')";
$sql = "SELECT * FROM `uplode` WHERE IMAGE ='$pic'";
$sql1 = mysqli_query($conn,$sql);
$sql2 = mysqli_num_rows($sql1);
if($sql2>=0){
    mysqli_query($conn,$insert);
    echo "insert success";
    header('location:second.php');
}
else{
    echo "error";
}
?>