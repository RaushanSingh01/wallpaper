<?php

session_start();
    $conn = mysqli_connect("localhost", "root", "", "wallpapers");
$sq = $_SESSION['name3'];
    $sqlima = "SELECT * FROM down WHERE USERNAME='$sq'";
    echo $sq;
    $imageres= mysqli_query($conn, $sqlima);
    while ($rows = mysqli_fetch_assoc($imageres)) {
      
        $Name=$rows['name'];
    
      
       
        echo "$Name";
    echo "</br>";
        

    }
    ?>
       
        



