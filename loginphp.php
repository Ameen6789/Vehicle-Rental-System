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
