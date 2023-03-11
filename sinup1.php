<?php
$conn = mysqli_connect("localhost","root","","wallpapers");
$NAMM = $_POST['Name'];
$PASSWO = $_POST['paword'];
$EMAIL= $_POST['gmail'];
$USNAME = $_POST['uname'];
$insert = "INSERT INTO sinup (name,password,email,username) VALUES ('$NAMM','$PASSWO','$EMAIL','$USNAME')";
$sql = "SELECT * FROM sinup WHERE username='$USNAME'";
$sql1 = mysqli_query($conn, $sql);
$sql2 = mysqli_num_rows($sql1);
$sq = "SELECT * FROM sinup WHERE password='$PASSWO'";
$sq1 = mysqli_query($conn, $sq);
$sq2 = mysqli_num_rows($sq1);
if($sql2==0 && $sq2==0){
    mysqli_query($conn, $insert);
    echo "Your Account Created Successfully";
    header('location:second.php');
}
if($sql2==1){
    echo "Your Username is Incorect";
}
if($sq2==1){
    echo "Your Email is Incorect";
}

?>