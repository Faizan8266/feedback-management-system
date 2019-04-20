<?php include '../root/conn.php';?>

<html>
<head>
<title> view</title>
    
    <style>
         body {
         margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
   
    background-size: cover;
    display: table;
    
    background: url("s.jpg")  no-repeat;

}

    .center
        {
            font-size:200%;
            
            background-color:cadetblue;
            color:black;
            margin-left: 15%;
            margin-right: 10%;
            font-weight: 200;
            font-family: sans-serif;
            font-style:normal;
          
            margin-bottom: -28px;
            
       }
         
    
table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }


     th{
   

      background: white;
        


     }
h2{

 font-weight: bold;
 font-size: 40px;

}

          td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
              width: 100px;
          }

          tr:nth-child(even) {
              background-color: #dddddd;
          }
body{


   background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),  url(view.jpg);
       
         background-size: cover;
         background-position: center;
       
}

    .box{


      padding: 22px;
      margin:13px;
      font-family: sans-serif;
      font-style: bold;

    }
    
    
    </style>  
    
</head>
    <body>
       
    <div class="box">

      <center><h2>LIST OF COMMENTS : </h2></center>


<table>
  <tr>
    <th>S.no</th>
    <th>Enroll no</th>
    <th>Course</th>
     <th>Faculty</th>
     <th>Comments </th>
      <th>Reply</th>
     
  </tr>
  <?php
  $result=mysqli_query($con,"SELECT * FROM `std_feedback`");
  if(mysqli_num_rows($result)>0){
    $tk=0;
    while($row=mysqli_fetch_assoc($result)){
      $tk++;
      ?>
        <tr>
          <td><?php echo $tk?></td>
          <td><?php echo $row['student_id']?></td>
          <td><?php echo $row['std_course']?></td>
           <td><?php echo $row['fac_name']?></td>
          <td><?php echo $row['comment']?></td>
         <td><?php echo $row['reply'] ?></td>

        </tr>
      <?php
    }
  }
  ?>
 
</table>

        </div>
    </body>
</html>