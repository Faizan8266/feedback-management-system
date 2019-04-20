<?php
include '../root/conn.php';

if(isset($_POST['btnsave'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `admin_user`='$name' AND `admin_pasword`='$password'");
    if(mysqli_num_rows($query)>0){
        echo "<script>alert('Successfull');</script>"; 
        echo "<script>window.location.href='../admin_pannel/admfile.php'</script>";  

        
    }
    else{
      echo "<script>alert('Error')</script>";
        echo "<script>window.location.href='admin_login.php'</script>";
    }
}

?>
<html>
<head>
    <title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="adm.css">
    <style>

body{
 background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("ad.jpg");
          background-position: center;
        
    background-size: cover;
    
    
}

.anch{
    width: 108px;
    background-color: #f44336;
    color: white;
    padding:13px 164px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
</style>
    </head>
    <body>
    <div class="sign">
    <form action="#" method="POST">
        <h1>ADMIN LOGIN</h1>
        <p>USERNAME</p>
        <input type="text" name="username" placeholder="username" required> 
        <p>PASSWORD</p>
        <input type="password" name="password" placeholder="password" required>
        <br><br>
    
        <input class="anch" type="submit" name="btnsave" value="Sign In">
        </form>     
        </div>
    </body>

</html>