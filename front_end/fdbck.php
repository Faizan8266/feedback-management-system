<?php
include '../root/conn.php';

session_start();
if(!empty($_SESSION['Student_enroll'])){
    $Student_enroll=$_SESSION['Student_enroll'];
}
else{
    echo "<script>window.location.href='student.php'</script>";
}

if(isset($_POST['btnsave'])){
     $fac_name=$_POST['faculty_name'];
    $stdcrs=$_POST['subject'];
    $com=$_POST['msg'];
   $Q1=$_POST['r1'];
    $Q2=$_POST['r2'];
    $date=date('Y-m-d');


 $query=mysqli_query($con,"INSERT INTO `std_feedback`( `student_id`, `std_course`,`fac_name`, `Q1`,`Q2`,`comment`, `reply`, `date`) VALUES ('$Student_enroll', '$stdcrs','$fac_name','$Q1','$Q2' ,'$com','null','$date')");
}
?>
<html>
<head>
    <title>Student</title>
    
    <style>
        body{
            
            margin: 65px;
            background: url(img.jpg) 50% 50% no-repeat; 
            background-size: cover;
            background-position: center;    
        }
        .centre{
            font-family: sans-serif;
            margin: auto;
            width: 60%;
            padding: 10px;
            
        }

            
        h2{
          
            font-size: 203%;
             margin-left: -3px;
            text-align:left;
                 
        }
        h1{
            color:#f11414cf;
            margin-left: 10px;
          font-size: 55px;
        }
     
 .submit{
    border: 1px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;        
        }
        
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 40px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
        
.col-75 {
   font-weight: bold;
    width: 75%;
    margin-left: 6px;
        }
        textarea{
        
        width: 34%;
        height: 26%;

        }
        p{
            font-weight: bold;
            color:black;
        }
      

    </style>
    <body>
    <h1 align="center">!Student Feedback!</h1>
        <hr/><hr/>
        <h2>Enter Your Feedback</h2>
    <form action="#" method="POST">
        <div class="col-75">
        Select Your Course:       
        <select id="subject" name="subject" required>
            <option>Select a Course</option>
            <option value="Btech">Btech</option>
            <option value="MBA">MBA</option>
            <option value="Biotechnology">Biotechnology</option>
            <option value="Hotel Mangement">Hotel Mangement</option>
            <option value="BCA">BCA</option>
            <option value="Mtech">Mtech</option>
            <option value="MCA">MCA</option>
            <option value="BBA">BBA</option>
        </select><br><br>
          Select Your Faculty:    
        <select id="faculty" name="faculty_name" required>
            <option>Select faculty</option>
            <option value="Deepak uniyal">Deepak uniyal</option>
            <option value="Ashish garg">Ashish garg</option>
            <option value="Sanjeev kukreti">Sanjeev kukreti</option>
            <option value=" Manish Sharma">Manish Sharma</option>
           
        </select><br><br>
        </div> 
        <p>1)The professor demonstrated intrest in student's learning. ?</p>
        <input type="radio" name="r1" value="YES"/>YES   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="r1" value="NO"/>NO
       
        <br>
        <p>2)The professor used lectures time productively.?</p>
        <input type="radio" name="r2" value="YES"/> YES   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="r2" value="NO"/> NO
        <br><br><br>
        <p>Give feedback</p>
        <textarea name="msg" row="5" cols="20" required></textarea><br/><br/>
        <div class="row">
              <button type="submit" name="btnsave">Submit</button>
          
        </div>

    </form>
    </body>
    </head>
</html>