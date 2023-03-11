<!DOCTYPE html>
<html>
<head>
<style>
        .body{
        width: 100%;
        background-color: chartreuse;
    }
    .head{
        width: 25%;
        height: 20vw;


            background-color:gray;
            padding: 15px;
            background-color: rgb(0, 0, 0,0.3);
            position: sticky;
           text-align: center;
          margin-top: 10vw;
          margin-left: 35%;
          border-radius: 15px;
            
    }  
    .username{
        width: 15vw;
        height: 25px;
        border-radius: 15px;
        margin-top: 2%;
       
    }  
    .butt{
        width: 7vw;
        height: 25px;
        border-radius: 15px;
        margin-top: 2%;
    }   
    
    </style>
    
    
    <title>Page Title</title>
    
</head>
<body class="body">
<form action="lode.php" method="post" enctype="multipart/form-data">
<div class="head">
        <div><input type="file" placeholder="Chose a file" name="uplodes" class="username"></div>
        <div><input type="text" placeholder="Enter Name of Wallpaper" name="Wall" class="username"></div>
        <div><select name="cate" class="username">
        <div><optgroup label="Catgoris of Wallpaper">
      <option value="android">android</option>
      <option value="animals">animals</option>
      <option value="cars">cars</option>
    </optgroup>
</select></div>
    <div><input type="submit" class="butt"></div>
</div>
</form>
</body>
</html>