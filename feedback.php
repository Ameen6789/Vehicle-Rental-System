<!DOCTYPE html>
<html lang="en">
<head>
    
  <style type="text/css">


/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */
*{

padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
html,body{
display: grid;
height: 100%;
width: 100%;
place-items: center;
background: #f2f2f2;
/* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
background: #4158d0;
color: #fff;
}
.wrapper{
width: 380px;
height: 380px;
background: #fff;
border-radius: 15px;
box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
font-size: 35px;
font-weight: 600;
text-align: center;
line-height: 100px;
color: #fff;
user-select: none;
border-radius: 15px 15px 0 0;
background: linear-gradient(-135deg, #c850c0, #4158d0);
}
.wrapper form{
padding: 10px 30px 50px 30px;
}
.wrapper form .field{
height: 50px;
width: 100%;
margin-top: 20px;
position: relative;
}
.wrapper form .field input{
height: 100%;
width: 100%;
outline: none;
font-size: 17px;
padding-left: 20px;
border: 1px solid lightgrey;
border-radius: 25px;
transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
border-color: #4158d0;
}
.wrapper form .field label{
position: absolute;
top: 50%;
left: 20px;
color: #999999;
font-weight: 400;
font-size: 17px;
pointer-events: none;
transform: translateY(-50%);
transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
top: 0%;
font-size: 16px;
color: #4158d0;
background: #fff;
transform: translateY(-50%);
}
form .content{
display: flex;
width: 100%;
height: 50px;
font-size: 16px;
align-items: center;
justify-content: space-around;
}
form .content .checkbox{
display: flex;
align-items: center;
justify-content: center;
}
form .content input{
width: 15px;
height: 15px;
background: red;
}
form .content label{
color: #262626;
user-select: none;
padding-left: 5px;
}
form .content .pass-link{
color: "";
}
form .field input[type="submit"]{
color: #fff;
border: none;
padding-left: 0;
margin-top: -10px;
font-size: 20px;
font-weight: 500;
cursor: pointer;
background: linear-gradient(-135deg, #c850c0, #4158d0);
transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
transform: scale(0.95);
}
form .signup-link{
color: #262626;
margin-top: 20px;
text-align: center;
}
form .pass-link a,
form .signup-link a{
color: #4158d0;
text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
text-decoration: underline;
}
.topnav {
    background-color: #333;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav id="id1" class="topnav">
     <a href="selectcarcompany.php">BACK</a>
</nav>
<?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");

$vid="";
$result1=mysqli_query($dbcon,"SELECT * from usernames where slno=(select max(slno) from usernames)");
if(!$result1){
// echo "hi";
           die('could not connect to mysql server:');
  }
  else
  {
         $rows=mysqli_num_rows($result1);
//   $vslno1="";
          if($rows)
            {
//   echo "2";
                     while($row=mysqli_fetch_array($result1)){
                                
                                 $vid=$row['id'];
// echo "$vid";
                      }
             }
            }
            $result2=mysqli_query($dbcon,"SELECT * from signup where username=$vid");
            if(!$result2){
   // echo "hi";
                        die('could not connect to mysql server:');
              }
              else
              {
                         $rows=mysqli_num_rows($result2);
//   $vslno1="";
                         if($rows)
                         {
                                 $vname2="";
//   echo "2";
                                  while($row=mysqli_fetch_array($result2)){

                                             $vname2=$row['name'];
                                    }
                          }
                         // echo "$vid";
                         //  echo "$vname2";
               }
               if(isset($_POST['button'])){
    
                $vname=$_POST['feed'];
                $query="INSERT INTO 3feedback(username,name,comment)values('$vid','$vname2','$vname')";
                if(mysqli_query($dbcon,$query)){

                    echo '<script> alert("feedback posted Successfully")</script>';

                }

               }
            ?>
<div class="wrapper">
      <div class="title">WRITE SOMETHING!!!</div>
      <form action="" name="myform" method="post">
        <div class="field">
          
          <textarea name="feed" cols="30" rows="8" required>Comments</textarea>
          <!-- <label></label> -->
        </div>
        <!-- <div class="content"> -->
          <!-- <div class="checkbox"> -->
            <!-- <input type="checkbox" id="remember-me"> -->
            <!-- <label for="remember-me">Remember me</label> -->
          </div>
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        <!-- </div> -->
        <div class="field">
        <input type="submit" value="send" name="button">
      </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
    
</body>
</html>
