<?php include '../root/conn.php';
include 'header.php';
if(isset($_POST['delete'])){
  $fac=$_POST['fac_id'];
  
  $result2=mysqli_query($con,"DELETE FROM `faculty` WHERE `fac_id`='$fac'");
  if(!$result2){
    echo "<script>alert('error')</script>";
  }
  else{
    echo "<script>alert('successfull')</script>";
  }
}



?>
  
    <style>
         body {
         margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
   
    background-size: cover;
    display: table;
    
    background: url("pic.jpg")  no-repeat;

}

         
    
table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }


h2{
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
       
    <div class="box" style="margin-top:50px">
        <center><h2>FACULTY LIST: </h2></center>



<table >
  <tr class="tr">
    <th class="th">S.NO</th>
    <th class="th">FACULTY NAME</th>
   
     <th class="th">EMAIL ID</th>
      <th class="th">PASSWORD</th>
      <th class="th">CONTACT NO</th>
      <th class="th">GENDER</th>
      <th class="th">Action</th>
      
  </tr>
  <?php
  $result=mysqli_query($con,"SELECT * FROM `faculty`");
  if(mysqli_num_rows($result)>0){
    $tk=0;
    while($row=mysqli_fetch_assoc($result)){
      $tk++;
      ?>
        <tr class="tr">
          <td class="td"><?php echo $tk?></td>
           <td class="td"><?php echo $row['name']?></td>
        
          <td class="td"><?php echo $row['fac_email']?></td>
          <td class="td"><?php echo $row['fac_pas']?></td>
           <td class="td"><?php echo $row['contact']?></td>
            <td class="td"><?php echo $row['gender']?></td>
            
          <form action="#" method="POST">
           <input type="hidden" name="fac_id" value="<?php echo $row['fac_id'];?>">
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