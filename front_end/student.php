<?php
session_start();
include '../root/conn.php';

if(isset($_POST['btnsave'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"SELECT * FROM `student` WHERE `enrol`='$name' AND `pasword`='$password'");
  if(mysqli_num_rows($query)>0){
        $_SESSION['Student_enroll']=$name;
        echo "<script>alert('Successfull');</script>"; 
        echo "<script>window.location.href='fdbck.php'</script>";  
    
    }
    else{
      echo "<script>alert('Error')</script>";
        echo "<script>window.location.href='student.php'</script>";
    
    }
}

?>
<html>
<head>
    <title>Student page</title>
    <link rel="stylesheet" type="text/css" href="std.css">
    <style>

 input{  
  width: 320px;
    height: 48px;
    background: #fffbfb;
    border: 4px solid grey;
    font-family: sans-serif;
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 10px;
    padding-left: 2px;
        
}
.anch{
    width: 108px;
    background-color: #f44336;
    color: white;
    padding: 14px 105px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


</style>

    </head>
    <body>
    <div class="sign">
    <form action="#" method="POST">
        <h1>Student Login</h1><hr/><br>
      <p>USERNAME :</p>
<input type="text" name="username" placeholder="username" required> 
<p>PASSWORD :</p>
<input type="password" name="password" placeholder="password" required>
<br><br>
     
    <input class="btn" type="submit" name="btnsave" value="Sign In">
        <br><br>
      
        <a class="anch" href="stdr.php">Register Here</a>
        
        </form>     
        </div>
    </body>

</html>