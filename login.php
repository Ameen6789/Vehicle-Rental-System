<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>

<style type="text/css">




@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
.button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }
  
  .button:hover {background-color: #3e8e41}
  
  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  




</style>



    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="C:\Users\sreyas T sasi\OneDrive\Desktop\miniproject\css\login.css">
  </head>
  <body>

  <?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
if(!$dbcon){
    die('could not connect to mysql server:');
}

    if(isset($_POST['button'])){

      // echo "hi";

        $vusername=$_POST['username'];

        $vpassword=$_POST['password'];

        // if(mysqli_query($dbcon,$query)){
    
          $result=mysqli_query($dbcon,"SELECT * from signup where username='$vusername'");

          if(!$result){
              die('could not connect to mysql server:');
          }
          else{
            // echo "hii";
            $rows=mysqli_num_rows($result);
    
            if($rows)
            {
              // echo "hi";
                while($row=mysqli_fetch_array($result)){
        // echo "$result"; }
        $name2=$row['username'];
        $password2=$row['password'];
        // echo "$name2";
        if($name2==$vusername && $password2==$vpassword)
        {
          $query="INSERT INTO usernames(id) VALUES ('$name2')";
          if(mysqli_query($dbcon,$query)){

          header("Location:selectcarcompany.php");
          }
          
        }
        else{
         echo '<script> alert("wrong username or password")</script>';
        }
      }
    }
    else{
      echo '<script> alert("wrong username or password")</script>';
    }
        mysqli_close($dbcon);
    }
  }
    ?>
    
           
    
   

    <div class="wrapper">
      <div class="title">Login</div>
      <form action="" name="myform" method="post">
        <div class="field">
          <input type="text" name="username"required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
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
        <input type="submit" value="submit" name="button">
      </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
     
    <!-- </div> -->
    <!-- <script src="C:\Users\sreyas T sasi\OneDrive\Desktop\miniproject\jsfiles\login.js"></script> -->
  </body>
</html>
