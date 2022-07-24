<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h1,h2{
    text-align: center;
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
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
<body>

<nav id="id1" class="topnav">
     <a href="prerequests.php">BACK</a>
     <!-- <a href="prerequestsbike.php">BIKE REQUESTS</a> -->

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
        $result=mysqli_query($dbcon,"SELECT * from bikeprerequest where username='$vid' ");

        if(!$result){
            die('could not connect to mysql server:');
        }
        else{
           echo "<center><h1>PREVIOUS REQUESTS FOR CAR</h1></center>";
          $rows=mysqli_num_rows($result);
  
          if($rows)
          {
            echo "<div class='table-wrapper'>";
            echo "<table border=1 class='fl-table'>
            <tr>
            <th>Sl No</th>
            <th>User ID:</th>
            <th>Name:</th>
            
            <th>Company</th>
            <th>Model</th>
            <th> Number</th>
            <th>Rent Price per Day</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Total</th>
            <th>Status</th>
        >
           
            </tr>";
          // echo "hi";
            while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['slno']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['name']."</td>";
            
              
                echo "<td>".$row['company']."</td>";
                echo "<td>".$row['model']."</td>";
                echo "<td>".$row['number']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['sdate']."</td>";
                echo "<td>".$row['edate']."</td>";
                echo "<td>".$row['total']."</td>";
                echo "<td>".$row['status']."</td>";
               
               

                //   echo $row['slno']."".$row['company'].$row['model'].$row['carnumber'].$row['price'].$row['seats'].$row['description'];
                  echo "</tr>";
                //   $vslno1=$row['slno'];
              }
              echo "</table>";
             echo "</div>";
             echo "<center><h1>CALL 9876543210 ON 7:00 AM ON YOUR START DATE</h1></center>";
$vid="";
            }
            
        }
       
        if(isset($_POST['button2'])){

            // echo "hi";
        
              $vusername=$_POST['username'];
              $vname2="";
              $vstatus="";
            //   $vname2="";
            $vcompany="";
            $vmodel="";
            $vseats="";
            $vcarnumber="";
            $vdescription="";
            $vprice="";
            $vstatus="";
        
         $result2=mysqli_query($dbcon,"SELECT * from bikeprerequest where number='$vusername'");
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
                             
          echo "2";
                               while($row=mysqli_fetch_array($result2)){
        
                                          $vname2=$row['slno'];
                                          $vstatus=$row['status'];
                                
                                                        // $vname2=$row['slno'];
                                                        // $vstatus=$row['status'];
                                                        $vcompany=$row['company'];
                                                        $vmodel=$row['model'];
                                                        $vcarnumber=$row['number'];
                                                        // $vseats=$row['seats'];
                                                        $vprice=$row['price'];
                                                        // $vdescription=$row['description'];
                                               }
                                     }
                                    // echo "$vid";
                                  //    echo "$vname2";
                          }
                      // echo "$vid";
                       echo "hii";
            
            if($vcarnumber==$vusername && $vstatus=='pending')
            {
                $query="INSERT INTO bike(company,model,number,price,description) VALUES ('$vcompany','$vmodel','$vcarnumber','$vprice','good')";
                // echo '<script> alert("Data Inserted Successfully")</script>';
              //  echo "$hello";
                if(mysqli_query($dbcon,$query)){
                $query="DELETE FROM bikeprerequest where number='$vusername' and status='pending'";
                if(mysqli_query($dbcon,$query)){
                    $query="DELETE FROM bikerequest where number='$vusername'";
                if(mysqli_query($dbcon,$query)){
                  
                    echo '<script> alert("Request Cancelled")</script>';
                    goto c;
                  }
                }

            }
        }
      }
    


    


c:
mysqli_close($dbcon);


        


    ?>
     <H3>CANCEL REQUEST</H2>
<div class="wrapper">
      <!-- <div class="title">Signup</div> -->
      <form action="" name="myform" method="post">
        <div class="field">
          <input type="text" name="username" required>
          <label>Vehicle Number</label>
        </div>
       
          
        <div class="field">
          <input type="submit" value="REMOVE"name="button2">
          <!-- <button  id="button">Signup</butto name n> -->
         
        </div>
      </form>
      <div class="field">
        <!-- <button  id="button">Signup</button> -->
       
      </div>
    </div>
    </body>
    </html>




