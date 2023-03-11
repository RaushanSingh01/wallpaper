<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        } 
    

        * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}



        * .he {
            background-image: url("image/3.jpg");
            width: 99vw;
            height: 100%;
            
            background-repeat: no-repeat;
            background-repeat: no-repeat;
        }

        .head {
            width: auto;
            height: 100%;
            background-color:gray;
            padding: 15px;
            background-color: rgb(0, 0, 0,0.3);
            position: sticky;
           
            top: 0;
        }

        .head1 {
            display: flex;
            width: 100%;
            height: 100%;
                /* background-color: rgb(0, 0, 0,0.3); */
            justify-content: space-evenly;
            align-items: center;
            align-self: center;
            font-size: 1.8vw;
        }
        .sapan1 {
            text-decoration: none;
            color: white;
        }

        .sapan2 {
            text-decoration: none;
            color: white;
        }

        .sapan3 {
            text-decoration: none;
            color: white;
        }

        .sapan4 {
            text-decoration: none;
            color: white;
        }

        .sapan5 {
            text-decoration: none;
            color: white;
        }

        .bodyimg {
            background-image: url("image/1.jpg");
            background-size: cover;
            width: 100%;
            height: 100vh;
        }

        .sapan6 {
            width: 100px;
            height: 40px;
            border-radius: 10px;
            background-color: #D8C13F;
            font-size: 15px;
            color: #B7372E;
        }

        .sapan6:hover {
            background-color: #B7372E;
            color: #D8C13F;
        }

        .body1 {
            color: #BF342B;
            margin-left: 10%;
            margin-top: -600px;
        }

        .body2 {
            color: #156285;
            margin-left: 10%;
            margin-top: 20px;
        }

        .body3 {

            color: red;
            display: flex;
            width: 100%;
            justify-content: space-evenly;
            align-items: center;
            font-size: 20px;

        }

        .body4 {

            width: 20vw;
            height: 10vw;
            background-image: url("image/androids.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 15px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .body5 {
            width: 20vw;
            height: 10vw;
            background-image: url("image/animals.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 15px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .body6 {
            width: 20vw;
            height: 10vw;
            background-image: url("image/cars.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 15px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .popular {
            color: red;
            margin-left: 10%;
            margin-top: 3%;
        }

        .seaech {
            width: 20vw;
            height: 30px;
            border-radius: 10px;
        }
        .wall{
            
            width: 100%;
            height: 100%;
            justify-content: space-evenly;
            align-items: center;
            align-self: center;
            font-size: 30px;
            margin-top: 18.4%;
            background-size: cover;
            text-align: center;
           background-image: url("image/androidf.jpg");
           background-size: cover;
           background-repeat: no-repeat;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 2vw;
        }
        .CD{
            width:50px;
            height: 30px;
            border-radius: 10px

        }
        .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

    </style>
</head>



   <div class="head">
        <div class="head1">
            <span class="sapan0"><a href="#"><img src="image/logo.png" width="200px" height="60px"></a></span>
            <form action="search.php" method="get">
            <span><input type="search" placeholder="Search wallpapers" name="search1" class="seaech" oninvalid="alert('Please Fill The Field.')" required>
            </span>
            <span><a href="search.php"><input type="submit" class="CD"></a></span>
            </form>

            <span><a href="second.php" class="sapan1">HOME</a></span>
            <span><a href="#" class="sapan2">CONTECT</a></span>
            
        

            <span><a href="login.php"><button input type="submit" class="sapan6"><b>Login</b></button></a></span>
        </div>

    </div>
    <div class="bodyimg">

    </div>
    <div>
        <div class="body1">
            <h1> HD Wallpaper</h1>
        </div>
        <div class="body2">
            <p><b>Choose from the highest quality selection of high-definition wallpapers–all submitted by our
                    talented<br>
                    community of contributors. Free to download and use for your mobile and desktop screens.</b></p>
        </div>
    </div>
    <div class="popular">
        <h2>Catgori of wallpapers</h2>
    </div>
    <div class="body3">
        <div class="body4">
            <a href="android1.php"><h3>HD Androids wallpapers</h3></a>
        </div>
        <div class="body5">
        <a href="animals1.php"><h3>HD Animals wallpapers</h3></a>
        </div>
        <div class="body6">
        <a href="cars1.php"><h3>HD Cars wallpapers</h3></a>
        </div>
    </div>
    <div class="wall">
    
   
    <?php


    $conn = mysqli_connect("localhost", "root", "", "wallpapers");

    $sqlimage = "SELECT * FROM uplode";
    $imageresult1 = mysqli_query($conn, $sqlimage);
   
    while ($rows = mysqli_fetch_assoc($imageresult1)) {
        $image = $rows['IMAGE'];
        $name=$rows['NAME'];
        echo "<img src='$image' width='40%'>";
        echo "<br>";
        echo "$name";
        
        echo "<a href='$image' download=$name class='downlode-btn'>               <button><i class='fa fa-download'>DOWNLODE</i></button></a>";
       
        echo "<br>";



    }
    ?>
    
    </div>
    </div>

</body>

</html>