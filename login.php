<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
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
</head>
<body class="body">
    <form action="login1.php" method="post">
    <div class="head">
        <div><input type="text" placeholder="Enter Your Username" name="Uname" class="username"></div>
        <div><input type="password" placeholder="Enter Your Password" name="Pword" class="username"></div>
        <div><input type="submit" class="butt"></div>
        <div><input type="reset" class="butt"></div>
        <div><a href="sinup.php">Don't have an account?</a></div>
    </div>
    </form>
</body>
</html>