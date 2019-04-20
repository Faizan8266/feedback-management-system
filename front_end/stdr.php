<?php
include '../root/conn.php';



if(isset($_POST['btnsave'])){
    
    $name=$_POST['name'];
    $enroll=$_POST['enroll'];
    $email=$_POST['email'];
    $pasw=$_POST['pasw'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];
    $date=date('Y-m-d');

    $q=mysqli_query($con,"SELECT `enroll` FROM `student` WHERE `enroll`='$enroll'");
    if(mysqli_num_rows($q)>0){
        echo "<script>alert('This email id is already Exist');</script>"; 
    }
    else{
        $query=mysqli_query($con,"INSERT INTO `student`( `std_name`, `enrol`, `email`, `pasword`, `course`, `sem`, `date`) VALUES ('$name', '$enroll', '$email','$pasw','$mobile', '$course ', '$date')");
        
        if($query){
            echo "<script>alert('Successfull');</script>"; 
            echo "<script>window.location.href='student.php'</script>"; 
        }
        else{
            echo "<script>alert('Error')</script>";
            echo "<script>window.location.href='stdr.php'</script>";
        }
    }
}
?>

<html>
<head>
    <title>STUDENT REGISER</title>
    

    <style>
       




       body {

         background: background: url(pic3.jpg) no-repeat;
    background-size: cover;
       
        
         background-position: center;
    display: block;
    margin: 13px;
}

.form {
    margin-bottom: 1px;
}


   .cen
         {
          font-size: 49px;
          font-family: sans-serif;     
       }

        .img{

      background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("pic3.jpg");
       
         background-size: cover;
         background-position: center;
       }
        
        .box{
              color:white;
             height:  420px;
             padding-bottom: 20px;
             width:390px;
             border: 2px solid lightblue;
           
           margin: 1px 0px 0px 339px;
           padding: 0px 39px 203px 55px;
                  }

        .box button
        {
            width:116px;
         background:red ;
            color:#fff;
        }
                 
.col-75 {
   
    width: 75%;
    margin-left: 6px;
        }

        .textbox{
            padding: 8px 20px;;
    margin: 12px 2px;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    width:200px;
   
        }
         .box p
        {
          padding: 1px;
    margin: 10px;

             font size: 50%;
            
        }
        p
        {
          color:whitesmoke;
            font size: 50%;
        }
           

         td{
          color:white;
            padding: 3px;
            margin-right: 3px;
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
       <div class="img">
    <div class="box">
     
    <form action="#" method="POST">
     <p><center style="font-size: 250%;">STUDENT REGISTER</center></p><hr/>
      <table>
          <tr>
              <td>NAME :</td>
              <td><input type="text" class="textbox" name="name" placeholder="Name"></td>
          </tr>
          <tr>
              <td>Enrollement No :</td>
              <td><input type="text" class="textbox" name="enroll" placeholder="Enter enrollement no"></td>
          </tr>
          <tr>
              <td> EMAIL ID :</td>
              <td><input type="email" class="textbox" name="email" placeholder="Enter your email id"></td>
          </tr>
          <tr>
              <td>PASSWORD :</td>
              <td><input type="password" class="textbox" name="pasw" placeholder="Enter your password"></td>
          </tr>
          <tr>
              <td>CONTACT NUMBER :</td>
              <td><input type="text" class="textbox" name="mobile" placeholder="Number"></td>
          </tr>
          <tr>
                <td>Select Your Course:</td>
                <td>
                <select id="course" name="course" class="textbox">
                    <option value="Btech">Btech</option>
                    <option value="MBA">MBA</option>
                    <option value="Biotechnology">Biotechnology</option>
                    <option value="Hotel Mangement">Hotel Mangement</option>
                    <option value="BCA">BCA</option>
                    <option value="Mtech">Mtech</option>
                    <option value="MCA">MCA</option>
                    <option value="BBA">BBA</option>
                </select>
                </td>
          </tr>
          <tr>
              <td>Select Your Semester:</td>
              <td>
                <select id="sam" name="sam" class="textbox">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                </select>
              </td>
          </tr>
    <tr>
    <td colspan="2"><center><button class="anch" type="submit" name="btnsave">Submit</button></center></td>
    </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
      </table> 
         </form>
       </div>
        </div>
    </body>
</html>