<!DOCTYPE html>
<html lang="en">
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
    <!-- <link rel="stylesheet" href="C:\Users\sreyas T sasi\OneDrive\Desktop\miniproject\css\addcar.css"> -->
    <!-- <link rel="stylesheet" href="C:\Users\sreyas T sasi\OneDrive\Desktop\miniproject\css\admin.css"> -->
    <title>Document</title>
</head>
<body>

<?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
if(!$dbcon){
  echo"hi";
    die('could not connect to mysql server:');
}

    if(isset($_POST['button'])){

      $vcompany=$_POST["company"];
      $vmodel=$_POST["model"];
      $vnumber=$_POST["carnumber"];
      $vprice=$_POST["price"];
    //   $vseats=$_POST["seat"];
      $vdescription=$_POST["about"];
      // $vtotal=$_POST["total"];
      $car="";

      // echo "$vcompany";
     
     $car1="";
     $car2="";
     $car3="";
    $result=mysqli_query($dbcon,"SELECT * from bike where number='$vnumber'");
// echo "$result";
        if(!$result){
            // echo  '<script> alert("BIKE NUMBER ALREADY EXIST")</script>';
            // echo "hi";
            // die('could not connect to mysql server:');
        }
        else{
          // echo "hii";
          $rows=mysqli_num_rows($result);
  
          if($rows)
          {
            // echo "hi";
              while($row=mysqli_fetch_array($result)){

                $car1=$row['number'];
              
              
                
              }
            }
          }
          if($car1==$vnumber)
          {
            echo  '<script> alert("BIKE NUMBER ALREADY EXIST")</script>';
            // mysqli_close($dbcon);
            goto a;

          } 
           
    $result1=mysqli_query($dbcon,"SELECT * from bikerequest where number='$vnumber'");
    // echo "$result";
            if(!$result1){
              echo "hi";
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
              $result2=mysqli_query($dbcon,"SELECT * from runningbike where number='$vnumber'");
    // echo "$result";
            if(!$result2){
              echo "hi";
                die('could not connect to mysql server:');
            }
            else{
              // echo "hii";
              $rows=mysqli_num_rows($result2);
      
              if($rows)
              {
                // echo "hi";
                  while($row=mysqli_fetch_array($result2)){
    
                    $car3=$row['number'];
                  
                  
                    
                  }
                  // echo "$car3";
                }
              }
              // echo "$vnumber";
              if($car2==$vnumber)
              {
                echo  '<script> alert("BIKE NUMBER ALREADY EXIST")</script>';
                // mysqli_close($dbcon);
                goto a;
    
              }

          
          if($car3==$vnumber)
          {
            echo  '<script> alert("BIKE NUMBER ALREADY EXIST")</script>';
            // mysqli_close($dbcon);
            goto a;

          }
          else{

                  $query="INSERT INTO bike(company,model,number,price,description) VALUES ('$vcompany','$vmodel','$vnumber','$vprice','$vdescription')";
                  // echo '<script> alert("Data Inserted Successfully")</script>';
                //  echo "$hello";
                  if(mysqli_query($dbcon,$query)){

                    // echo "hi";
            
                     echo  '<script> alert("Data Inserted Successfully")</script>';
                  }
                  else
                  {
                    echo  '<script> alert("ENTER VALID DETAILS")</script>';
                   
                  }
                
         
    
  
      



      // $query="INSERT INTO car VALUES ('$vnumber','$vcompany','$vmodel','$vprice','$vseats',$vtotal)";
    
      
     

    }
    a:
    mysqli_close($dbcon);
  }






?>
<nav id="id1" class="topnav">
     <a href="adminhome.php">BACK</a>
</nav>



  
    </div> <div class="wrapper">
      <div class="title">Add  Bike</div>
      <form action="#" name="myform" method="post">
        <!-- <div class="field"> -->
          <!-- <input type="number" name="model" required> -->
          <!-- <label>Model</label> -->
        <!-- </div> -->
       
          <div class="field">
            <input type="text" name="carnumber" required>
            <label>Bike Number</label>
          </div>
          <!-- <div class="field"> -->
            <!-- <input type="text" ="username" required> -->
            <!-- <label>Username</label> -->
          <!-- </div> -->
        <!-- <div class="field"> -->
          <!-- <input type="number" name="price"  required> -->
          <!-- <label>Rent Price</label> -->
        <!-- </div> -->

        <div class="field">
          <input type="text" name="company"  required>
          <label>Company</label>
        </div>





        <!-- <div  class="wrapper"> -->
  <!-- <form action="#" name="myfor" action="POST"> -->
  <!-- <div> --><br>
<li>Model</li>
   <select class="custom-select" style="width:200px;" name="model">
   <option value="2015">2015</option>
   <option value="2016">2016</option>
   <option value="2017">2017</option>
   <option value="2018">2018</option>
   <option value="2019">2019</option>
   <option value="2020">2020</option>
   <option value="2021">2021</option>
   <option value="2022">2022</option>
  </select><br>
  <li>Rent Price</li>
  <select class="custom-select" style="width:200px;" name="price">
  <option value="400">400</option>
   <option value="600">600</option>
  </select>
<!-- </div> --><br>

<br><br>
   <div>
       <li>About</li>
       <textarea name="about" cols="10" rows="5"></textarea>
   </div>
  <!-- </form> -->
  <!-- </div> -->









        <!-- <div class="content"> -->
          <!-- <div class="checkbox"> -->
            <!-- <input type="checkbox" id="remember-me"> -->
            <!-- <label for="remember-me">Remember me</label> -->
          </div>
         
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        <!-- </div> -->
        <div class="button">
          <input type="submit" value="submit"name="button">
          <!-- <button  id="button">Signup</butto name n> -->
         
        </div>
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
      <div class="field">
        <!-- <button  id="button">Signup</button> -->
       
      </div>
    </div>
  
    <!-- <script src="C:\Users\sreyas T sasi\OneDrive\Desktop\miniproject\jsfiles\addcar.js"></script> -->
</body>
</html>

