<?php
include '../root/conn.php';

if(isset($_POST['btnsave'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"SELECT * FROM `faculty` WHERE `fac_email`='$name' AND `fac_pas`='$password'");
    
    if(mysqli_num_rows($query)>0){

        echo "<script>alert('Successfull');</script>"; 
        echo "<script>window.location.href='facreply.php'</script>"; 
    }
    else{
        echo "<script>alert('Error')</script>";
        echo "<script>window.location.href='faculty.php'</script>";
    }
}

?>
<html>
<head>
   <title>faculty page</title>
    <link rel="stylesheet" type="text/css" href="fac.css">
       <style>
    body{
 
      background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("reg.jpg");
          
        
    background-size:cover;
    
    
}
.sign{
    
    border: 5px solid rgba(255,255,255,0.3);
    border-radius: 5px;
    padding: 4em;
    
    
    
    position: absolute;
    top: 2%;
    left: 35%;
   
}


input{  
  width: 320px;
    height: 48px;
    background: #fffbfb;
    border: none;
    font-family: sans-serif;
   
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



h1{
    margin-top: 0px;
    font-family:Source sans-serif;
    font-weight:bolder;
    color: white;
    font-size: 50px;
    text-align: center;
    
}
p{
 
 font-weight:bold;

}
</style>
  
    </head>
    <body>
    <div class="sign">
    <form action="#" method="POST">
        <h1>Faculty Login</h1><hr/>
      <p> USERNAME :</p>
<input type="email" name="username" placeholder="username" required> 
<p>PASSWORD :</p>
<input type="password" name="password" placeholder="password" required>
<br><br>

          <input class="btn" type="submit" name="btnsave" value="Sign In">
          <br><br>
            
        <a class="anch" href="prof.php">Register Here</a>
      </form>     
        </div>
    </body>

</html>