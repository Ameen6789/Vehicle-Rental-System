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
            // $vimage=$_POST['image'];
            $status='error';
           
            if(!empty($_FILES["image"]["name"])){
              // echo "hai";

              $filename=basename($_FILES["image"]["name"]);
              $filetype=pathinfo($filename, PATHINFO_EXTENSION);

              $allowtypes=array('jpg','png','jpeg');

              if(in_array($filetype,$allowtypes)){
                $image=$_FILES['image']['tmp_name'];
                $imgcontent=addslashes(file_get_contents($image));
                $query="INSERT INTO images(image,created)VALUES('".$imgcontent."',NOW())";
                // $query="INSERT INTO signup(name,password,number) VALUES ('$vname','$vpassword','$vnumber')";
    
            if(mysqli_query($dbcon,$query)){
              goto b;
            }
                else
                {
                  echo '<script> alert(" Wrong File Type")</script>';
                  goto c;
                }
              }
            }
         
    
           
    
           
            b:
            $query="INSERT INTO signup(name,password,number) VALUES ('$vname','$vpassword','$vnumber')";
    
            if(mysqli_query($dbcon,$query)){
    
                $result=mysqli_query($dbcon,"SELECT * from signup where password='$vpassword'");
    
                if(!$result){
                    die('could not connect to mysql server:');
                }
                else{
                    $rows=mysqli_num_rows($result);
    
                    if($rows)
                    {
                        while($row=mysqli_fetch_array($result)){
                            
                        echo  '<script> alert("Hai..............:'.$row['name'].'\nYour Username....:'.$row['username'].'\nPassword.........:'.$row['password'].'");</script>';
              
                        
                        
                        
                           
    
                        }
                    }
                }
    
                // echo "$result";
    
            }
            else{
                echo "error";
            }
            c:
            mysqli_close($dbcon);
            
    
    }
  
    ?>
