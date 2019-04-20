<!DOCTYPE html>
<html>
<head><title> Index </title></head>

<style type="text/css">

#header{
	background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(pic.jpg);
   
    background-size: cover;
    background-position: center;
    color: black;
}

{
    margin: 0;
    padding: 0;
    
} 	

.main1{
	width: 58%;
	padding-left: 9%;
	margin-left: 15%;
}

.main-nav
{
    float: right;
     list-style: none;   
       margin-top: 30px;  
}
.main-nav li
{
    display: inline-block;
    
}
.main-nav li a
{
    color: white;
    font-weight: bold;
    text-decoration: none;
    padding: 5px 20px;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}

.main-nav li a:hover{
	color: black
}
.main-nav li.active a
{
    border: 1px black;
}


.button
{
    margin-top: 30px;
    margin-left: 440px;
    
}
.btn
{
    border: 1px black;
    padding: 10px 30px;
    color: #0a0908;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;
    text-transform: uppercase;
    
}
b{
        font-weight: 200;
    font-size: 22px
}

.hero
{
   
    width: 1200px;
    margin-left: 0px;
    margin-top: 0px;
}

h1
{
    color :black;
    text-transform: uppercase;
    font-size: 70px;
    text-align: center;
    
}

.footer {
  overflow: hidden;
  background-color: black;
  color: white;
  bottom:0px;
  width: 100%;
  padding: 10px 0px 10px 0px;
}  
#h_title:hover{
	background-color:white; 
	color: black;
} 
</style>

<header id="header">
<table>
		<td class="main1"><img src="logo.png" alt="logo" style="height: 50px"><br><br><br><br><br></img></td>
		<td<ul class="main-nav">
          <li id="h_title"><a href=""> HOME  </a></li> 
          <li id="h_title"><a href="../front_end/view_feedback.php"> FEEDBACK DATA</a></li> 
          
          <li id="h_title"><a href="select.php"> LOG IN  </a></li> 
        </ul> 
</table>

</header>

</html>