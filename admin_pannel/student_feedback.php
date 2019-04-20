<?php include 'header.php';?>
<?php include '../root/conn.php';


if(isset($_POST['delete'])){
  $stu_id=$_POST['stu_id'];
  
  $result2=mysqli_query($con,"DELETE FROM `student` WHERE `stu_id`='$stu_id'");
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
<title>student_feedback page</title>
    
    <style>
         body {
    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url("slist.jpg");
          background-position: center;
        
    background-size: cover;
}

         
    
table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }


     .th{
   

      background: white;

     }
a{
 font-size: 15px;
 color: black;
 font-weight: bold;

}


h2{
  color:lightcoral;
  font-weight: bold;


}




          .td, .th {
            background-color: #25474c;
               color: #fff;
            
              text-align: left;
              padding: 8px;
              width: 100px;
          }

     



    .th{
       color: #fff;

    }
    
    
    </style>  
    
</head>
    <body>
       
    
       <center> <h2>STUDENT LIST:  </h2></center>



<table>
  <tr>
    <th class="th">S.NO</th>
    <th class="th">STUDENT NAME</th>
    <th class="th">ENROLL</th>
    <th class="th">EMAIL ID</th>
    <th class="th">PASSWORD</th>
    <th class="th">COURSE</th>
    <th class="th">SEMESTER</th>
    <th class="th">DATE</th>
    <th class="th">ACTION</th>
  </tr>
  <?php
  $result=mysqli_query($con,"SELECT * FROM `student`");
  if(mysqli_num_rows($result)>0){
    $tk=0;
    while($row=mysqli_fetch_assoc($result)){
      $tk++;
      ?>
        <tr>
          <td class="td"><?php echo $tk?></td>
          <td class="td"><?php echo $row['std_name']?></td>
          <td class="td"><?php echo $row['enrol']?></td>
          <td class="td"><?php echo $row['email']?></td>
          <td class="td"><?php echo $row['pasword']?></td>
          <td class="td"><?php echo $row['course']?></td>
          <td class="td"><?php echo $row['sem']?></td>
          <td class="td"><?php echo $row['date']?></td>
          <form action="#" method="POST">
          <input type="hidden" name="stu_id" value="<?php echo $row['stu_id'];?>">
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