<?php

$conn = mysqli_connect("localhost", "root", "", "wallpapers");
$sql =$_GET['search1'];

$sqlimage = "SELECT * FROM uplode WHERE `CATEGORY`='cars' and `NAME` LIKE '%$sql%'";
$imageresult1 = mysqli_query($conn, $sqlimage);
$num = mysqli_num_rows($imageresult1);
if ($num > 0) {
    while ($rows = mysqli_fetch_assoc($imageresult1)) {
        $image = $rows['IMAGE'];
        $name = $rows['NAME'];
        echo "<img src='$image' width='40%'>";
        echo "<br>";
        echo "$name";

        echo "<a href='$image' download=$name class='downlode-btn'>               <button><i class='fa fa-download'>DOWNLODE</i></button></a>";
       
        echo "<br>";



    }
}
    else{
        ?>

            <script>
                alert("No Data Found..")
                window.history.back()
            </script>
        <?php
    }

mysqli_close($conn);
?>