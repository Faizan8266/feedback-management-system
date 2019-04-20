
<?php include '../root/conn.php';
?>
<html>
<head>
<title> Select page</title>
    
    <style>
         body {
          font-style: bold;

         margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
   
    background-size: cover;
    display: table;
    
    background: url("s.jpg") 50% 50% no-repeat;

}

    .center
        {
            font-size: 10%;
    background-color: cadetblue;
    color: whitesmoke;
    margin-left: 14%;
    margin-right: 196px;
    font-weight: ;
    font-style: bold;
    margin-bottom: -20px;
}
        
     
    
.button
{
   width: 100%;
    
    text-align: center;
    
}
.btn
{
     padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
    border: 1px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;
    text-transform: uppercase;
    
}

.btn-one
{
    background-color: darkcyan;
    font-family: "Roboto",sans-serif;
}

.btn-two

{
     background-color: darkcyan;
    font-family:  "Roboto",sans-serif;
}

.btn-three

{
     background-color: darkcyan;
    font-family:  "Roboto",sans-serif;
}
.btn-two:hover
{
    background-color: darkcyan;
    transition: all 0.5s ease-in;
}

.btn-three:hover
{
    background-color: darkcyan;
    transition: all 0.5s ease-in;
}

 h1{
  color:white;
  font-style: bold;
  font-size: 256%;
   margin:76px;




 }   


    body{
background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(pic3.jpg);
   
    background-size: cover;
    background-position: center;
    color: black;
    }
    </style>  
    
</head>
  <body>
       <h1><center>SELECT OPTION FOR LOGIN</h1> </center><br><br>
       <div class ="button">
             <a href="student.php" class="btn btn-one">  STUDENT  </a>
             <a href="faculty.php" class="btn btn-two"> 
                  FACULITY </a>
             <a href="admin_login.php" class="btn btn-three"> 
                  ADMIN </a>  
        </div>
      
    </body>
</html>