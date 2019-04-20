<?php


include '../root/conn.php';


if(isset($_POST['btnsave'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pasw=$_POST['password'];
    $mobile=$_POST['contact'];
    $gender=$_POST['gender'];
   


    $q=mysqli_query($con,"SELECT `fac_email` FROM `faculty` WHERE `fac_email`='$email'");
    if(mysqli_num_rows($q)>0){
        echo "<script>alert('This email id is already Exist');</script>"; 
    }
    else{
        $query=mysqli_query($con,"INSERT INTO `faculty`(`name`, `fac_email`, `fac_pas`, `contact`, `gender`) VALUES ('$name','$email' ,'$pasw','$mobile','$gender')");
        if($query){
            echo "<script>alert('Successfull');</script>"; 
            echo "<script>window.location.href='faculty.php'</script>"; 
        }
        else{
            echo "<script>alert('Error')</script>";
            echo "<script>window.location.href='prof.php'</script>";
        }
    }
}
?>

<html>
<head>
    <title>FACULTY REGISER</title>
    

    <style>
    body{
 
      background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("prof.jpg");
          background-position: center;
        
    background-size: cover;
    
    
}

        .textbox{
    

    padding: 8px 20px;;
    margin: 12px 2px;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
   
        }
    .center
        {
            font-family: sans-serif;
            
       }
        
     .box{ 
      color:white;
      width: 436px;
      border: 2px solid lightgray;
      margin-left: 34%;
      margin-top: 3%;
     }

        td{  color:azure;
            padding: 3px;
            margin-right: 3px;
        }

.form {
    margin-bottom: 1px;
}

.anch{
    
    background-color: #f44336;
    color: white;
   
    text-align: center;
    text-decoration: none;
    display: inline-block;
        border: none;
    width: 100px;
    height: 30px;
}
    </style>
    </head>
    <body>
    <div class="box">
    <form action="#" method="POST">
     <center style="font-size: 250%;">FACULTY REGISTER</center><hr/>
       <table align="center">
          <tr>
              <td> NAME :</td>
              <td><input type="text" class="textbox" name="name" placeholder="Name"></td>
          </tr>
        
          <tr>
          <td>EMAIL Id :</td> 
         <td> <input type="text" class="textbox" name="email" placeholder="Enter your email"></td>
     </tr>
      <tr>
         <td> PASSWORD :</td> 
         <td><input type="password" class="textbox" name="password" placeholder="Enter your password"> </td>
     </tr>
     <tr>

         <td>CONTACT NUMBER :</td>  
        <td><input type="text" class="textbox" name="contact" placeholder="Number"></td>
    </tr>
      <td> GENDER :</td>
            <td><input type="radio" class="textbox" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</td>
    </tr>
    <tr>
      <td colspan="2"><center><button class="anch" type="submit" name="btnsave">Submit</button></center></td>
    </tr>
      </table>
         </form>
        </div>
    </body>
</html>