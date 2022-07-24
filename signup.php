<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
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
    <meta charset="utf-8">
   
 
   
  </head>
  <body>
  <nav id="id1" class="topnav">
     <a href="home.php">HOME</a>
</nav>
  <?php
    
    $user='root';
    $pass='';
    $db='miniproject';
    
    $dbcon=mysqli_connect('localhost',$user,$pass,"$db");
    if(!$dbcon){
        die('could not connect to mysql server:');
    }
    $status=$statusmsg='';
        if(isset($_POST['button'])){
    
            $vname=$_POST['name'];
    
            $vpassword=$_POST['password'];
    
            $vnumber=$_POST['number'];
            $car2="";
            $vnumber2=$vnumber;

            $length=strlen($vnumber);

            echo "$vnumber";

            if($length<10)
            {
              goto c;
            }

            // $

            $result1=mysqli_query($dbcon,"SELECT * from signup where number='$vnumber'");
    // echo "$result";
            if(!$result1){
                die('could not connect to mysql server:');
            }
            else{
              // echo "hii";
              $rows=mysqli_num_rows($result1);
      
              if($rows)
              {
                // echo "hi";
                  while($row=mysqli_fetch_array($result1)){
    
                    $car2=$row['number'];
                  
                  
                    
                  }
                }
              } 
              if($car2==$vnumber)
              {
                echo '<script> alert(" phone number already exist")</script>';
                goto a;
                
              }


            // $vimage=$_POST['image'];
            $status='error';
            $vid="";
           
            if(!empty($_FILES["image"]["name"])){
              // echo "hai";

              $filename=basename($_FILES["image"]["name"]);
              $filetype=pathinfo($filename, PATHINFO_EXTENSION);

              $allowtypes=array('jpg','png','jpeg');

              if(in_array($filetype,$allowtypes)){
                $image=$_FILES['image']['tmp_name'];
                $imgcontent=addslashes(file_get_contents($image));

                $query="INSERT INTO signup(name,password,number,image,created) VALUES ('$vname','$vpassword','$vnumber2','$imgcontent',NOW())";
                if(mysqli_query($dbcon,$query)){


                  $result1=mysqli_query($dbcon,"SELECT * from signup where username=(select max(username) from signup)");
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
                                
                                 $vid=$row['username'];
// echo "$vid";
                      }
             }
            }
                  

    
                  $result=mysqli_query($dbcon,"SELECT * from signup where username='$vid'");
      
                  if(!$result){
                      die('could not connect to mysql server:');
                  }
                  else{
                      $rows=mysqli_num_rows($result);
      
                      if($rows)
                      {
                          while($row=mysqli_fetch_array($result)){
                              
                          echo  '<script> alert("Hai..............:'.$row['name'].'\nYour Username....:'.$row['username'].'\nPassword.........:'.$row['password'].'");</script>';
                
                          goto a;
                          
                          
                             
      
                          }
                      }
                  }
      
                  // echo "$result";
      
              }
              else{
                  echo "error";
              }
                // $query="INSERT INTO images(image,created)VALUES('".."',NOW())";
                // $query="INSERT INTO signup(name,password,number) VALUES ('$vname','$vpassword','$vnumber')";
    
            }
                else
                {
                  echo '<script> alert(" Wrong File Type")</script>';
                  goto a;
                }
              }

              c:

              echo '<script> alert(" Wrong Mobile Number")</script>';

            
         
    
           
    a:
          
            mysqli_close($dbcon);
            
    
    }
  
    ?>
    
    <div class="wrapper">
      <div class="title">Signup</div>
      <form action="" name="myform" method="post" enctype="multipart/form-data">
        <div class="field">
          <input type="text" name="name" required>
          <label>Name</label>
        </div>
       
          <div class="field">
            <input type="number" name="number" required>
            <label>Phone</label>
          </div>
          <li>Upload Licence</li>
          <div class="">
          <input type="file" name="image"  required>
          <!-- <label>Upload Licence</label> -->
        </div>
          <!-- <div class="field"> -->
            <!-- <input type="text" ="username" required> -->
            <!-- <label>Username</label> -->
          <!-- </div> -->
        <div class="field">
          <input type="password" name="password"  required>
          <label>Password</label>
        </div>
        <!-- <div class="content"> -->
          <!-- <div class="checkbox"> -->
            <!-- <input type="checkbox" id="remember-me"> -->
            <!-- <label for="remember-me">Remember me</label> -->
          </div>
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        <!-- </div> -->
        <div class="field">
          <input type="submit" value="submit"name="button">
          <!-- <button  id="button">Signup</butto name n> -->
         
        </div>
        <div class="signup-link">Already A Member? <a href="login.php">Login</a></div>
      </form>
      <div class="field">
        <!-- <button  id="button">Signup</button> -->
       
      </div>
    </div>
   
  </body>
</html>
