<?php include 'header.php';?>
<?php include '../root/conn.php';


if(isset($_POST['delete'])){
  $fdbck_id=$_POST['fdbck_id'];
  
  $result2=mysqli_query($con,"DELETE FROM`std_feedback`  WHERE `fdbck_id`='$fdbck_id'");
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
<title> list page</title>
    
    <style>

body {

background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("fd.jpg");
background-position: center;

background-size: cover;

}

    


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


h2{
  margin: 98px;
color:lightcoral;
font-weight: bold;
}

.th {
background-color: #1c95a9;
color: #131111;
text-align: left;
padding: 8px;

width: 100px;
}



a{
font-size: 15px;
color: black;
font-weight: bold;

}
.td, .th {
background-color: #25474c;
   color: #fff;

  text-align: left;
  padding: 8px;
  width: 100px;
}

    
    </style>  
    
</head>
    <body>
       
    <div class="box">
        <center><h2>    </h2></center>



<table>
  <tr>
    <th class="th">S.no</th>
    <th class="th">Enroll no</th>
    <th class="th">Course</th>
     <th class="th">Faculty name</th>
    <th class="th">The professor demonstrated intrest in student's learning.?</th>
    <th class="th">The professor used lectures time productively.?</th>
     <th class="th">Comment show</th>
      <th class="th">Reply</th>
      <th class="th">Action</th>
  </tr>
  <?php
  $result=mysqli_query($con,"SELECT * FROM `std_feedback`");
  if(mysqli_num_rows($result)>0){
    $tk=0;
    while($row=mysqli_fetch_assoc($result)){
      $tk++;
      ?>
        <tr>
          <td class="td"><?php echo $tk?></td>
          <td class="td"><?php echo $row['student_id']?></td>
          <td class="td"><?php echo $row['std_course']?></td>
           <td class="td"><?php echo $row['fac_name']?></td>
           <td class="td"><?php echo $row['Q1']?></td>
           <td class="td"><?php echo $row['Q2']?></td>
          
          <td class="td"><?php echo $row['comment']?></td>
           <td class="td"><?php echo $row['reply']?></td>
          <form action="#" method="POST">
           <input type="hidden" name="fdbck_id" value="<?php echo $row['fdbck_id']?>">
            <td class="td"><input type="submit" name="delete" value="Delete"></td>
          </form>


        </tr>
      <?php
    }
  }
  ?>
 
</table>
        </div>
    </body>
</html>