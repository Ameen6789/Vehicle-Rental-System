<?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
if(!$dbcon){
    die('could not connect to mysql server:');
}

    if(isset($_POST['button'])){

      $vadminid2="";
      $vpassword2="";

      // echo "hi";

        $vadminid=$_POST['adminid'];

        $vpassword=$_POST['password'];

        // if(mysqli_query($dbcon,$query)){
    
          $result=mysqli_query($dbcon,"SELECT * from adminlog where adminname='$vadminid'");

          if(!$result){
              die('could not connect to mysql server:');
          }
          else{
            // echo "hii";
            $rows=mysqli_num_rows($result);
    
            if($rows)
            {
              echo '$result';
                while($row=mysqli_fetch_array($result)){
        // echo "$result"; }
        $vadminid2=$row['adminname'];
        $vpassword2=$row['password'];
        // echo "$vadminid2";
        // echo "go";
                }
              }
            }
        if($vadminid2==$vadminid && $vpassword2==$vpassword)
        {
          // $query="INSERT INTO usernames(id) VALUES ('$name2')";
          // echo '<script> alert("LOGIN Successfully")</script>';

          header("Location:adminhome.php");
          }
          else{
            // echo "hi";
           echo '<script> alert("wrong Admin ID or password")</script>';
          }
          
        }
       
      
    
   
        mysqli_close($dbcon);
   
    ?>
