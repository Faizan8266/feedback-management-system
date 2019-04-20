<?php include '../root/conn.php';

if(isset($_POST['btnsave'])){
  $fdbck_id=$_POST['fdbck_id'];
  $reply=$_POST['rep'];

  $result2=mysqli_query($con,"UPDATE `std_feedback` SET `reply`='$reply' WHERE `fdbck_id`='$fdbck_id'");
  if(!$result2){
    echo "<script>alert('error')</script>";
  }
  else{
    echo "<script>alert('successfull')</script>";
  }
}


?>
<html>
<head>
 <title>Reply</title>
    
    <style>
body{

margin: 65px;
background: url(rp.jpg) 50% 50% no-repeat; 
background-size: cover;
background-position: center;   

}
           

a{
font-size: 15px;
color: black;
font-weight: bold;

}
.td, .th {
background-color: #1c95a9;
color: #fff;

text-align: left;
padding: 8px;
width: 100px;
}

label {
padding: 12px 12px 12px 0;
display: inline-block;
}




.col-25 {

width: 25%;
margin-left: 6px;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;

}

input[type=submit]:hover {
background-color:cadetblue;
}

element.style{
width: 15px;
height: 91px;

}

.col-75 {

width: 75%;
margin-left: 6px;
margin-top: 5px;
}
         

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


    </style>
    
    <body>
    <h1 align="center">Faculty Reply Feedback</h1>
        <hr/><hr/>
      
  <div class="row">
 

<div class="col-75">
</head>
<body>



<table>
  <tr>
    <th class="th">S.NO</th>
    <th class="th">Enroll</th>
    <th class="th">COURSE</th>
    <th class="th">The professor demonstrated intrest in student's learning. ?</th>
    <th class="th">The professor used lectures time productively.?</th>
     <th class="th">COMMENT SHOW</th>
      <th class="th">REPLY</th>
      <th class="th">ACTION</th>
  </tr>
  <?php
  $result=mysqli_query($con,"SELECT * FROM `std_feedback` WHERE `reply`='null'");
  if(mysqli_num_rows($result)>0){
    $tk=0;
    while($row=mysqli_fetch_assoc($result)){
      $tk++;
      ?>
        <tr>
          <td><?php echo $tk?></td>
          <td><?php echo $row['student_id']?></td>
          <td><?php echo $row['std_course']?></td>
          <td><?php echo $row['Q1']?></td>
          <td><?php echo $row['Q2']?></td>
          <td><?php echo $row['comment']?></td>
          <form action="#" method="POST">
            <td><input type="hidden" name="fdbck_id" value="<?php echo $row['fdbck_id']?>"><textarea name="rep"></textarea></td>
            <td><input type="submit" name="btnsave" value="Submit"></td>
          </form>


        </tr>
      <?php
    }
  }
  ?>
 
</table>

      </div>
    </body>
    </head>
</html>