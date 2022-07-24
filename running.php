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

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
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
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav id="id1" class="topnav">
     <a href="adminhome.php">BACK</a>
     <a href="runningbikes.php">Running Bikes?</a>
</nav>
    <?php
     $user='root';
     $pass='';
     $db='miniproject';
     
     $dbcon=mysqli_connect('localhost',$user,$pass,"$db");
             $result=mysqli_query($dbcon,"SELECT * from running");
     
             if(!$result){
                 die('could not connect to mysql server:');
             }
             else{
                echo "<center><h1>Available Cars</h1></center>";
               $rows=mysqli_num_rows($result);
       
               if($rows)
               {
                   echo "<div class='table-wrapper'>";
                   echo "<table border=1 class='fl-table'>
                   <tr>
                   <th>Sl No</th>
                   <th>User ID:</th>
                   <th>Name:</th>
                   <th>Request No:</th>
                   <th>Company</th>
                   <th>Model</th>
                   <th>Car Number</th>
                   <th>Rent Price per Day</th>
                   <th>Start Date</th>
                   <th>End Date</th>
                   <th>Total</th>
                   </tr>";
                 // echo "hi";
                   while($row=mysqli_fetch_array($result)){
                       echo "<tr>";
                       echo "<td>".$row['slno']."</td>";
                       echo "<td>".$row['username']."</td>";
                       echo "<td>".$row['name']."</td>";
                       echo "<td>".$row['rno']."</td>";
                     
                       echo "<td>".$row['company']."</td>";
                       echo "<td>".$row['model']."</td>";
                       echo "<td>".$row['carnumber']."</td>";
                       echo "<td>".$row['price']."</td>";
                       echo "<td>".$row['sdate']."</td>";
                       echo "<td>".$row['edate']."</td>";
                       echo "<td>".$row['total']."</td>";
                     //   echo $row['slno']."".$row['company'].$row['model'].$row['carnumber'].$row['price'].$row['seats'].$row['description'];
                       echo "</tr>";
                     //   $vslno1=$row['slno'];
                   }
                   echo "</table>";
                  echo "</div>";
                 }
                 
             }

             if(isset($_POST['button2'])){

                // echo "hi";
            
                  $vusername=$_POST['username'];
                  $vname2="";
            
             $result2=mysqli_query($dbcon,"SELECT * from running where slno='$vusername'");
             if(!$result2){
            // echo "hi";
            echo '<script> alert("WRONG SL NUMBER")</script>';
               }
               else
               {

                $result3=mysqli_query($dbcon,"SELECT * from dupcar where slno='$vusername'");
$vcompany1="";
$vmodel1="";
$vcarnumber1="";
$vprice1="";
$vseats1="";
$vdescription1="";
$car1="";
$vnumber="";
                if(!$result3){
                  // echo "hi";
                  echo '<script> alert("WRONG SL NUMBER")</script>';
                     }
                     else
                     {


                      $rows=mysqli_num_rows($result3);
       
                      if($rows)
                      {


                        while($row=mysqli_fetch_array($result3)){


                          $vslno1=$row['slno'];
                                                        $vcompany1=$row['company'];
                                                        $vmodel1=$row['model'];
                                                        $vcarnumber1=$row['carnumber'];
                                                        $vprice1=$row['price'];
                                                        $vseats1=$row['seats'];
                                                        $vdescription1=$row['description'];
                        
                        
                        }

                      }
                    }
                    $result=mysqli_query($dbcon,"SELECT * from car where carnumber='$vcarnumber1'");
// echo "$result";
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

                $car1=$row['carnumber'];
              
              
                
              }
            }
          }
          if($car1==$vcarnumber1)
          {

            echo '<script> alert("CARNUMBER ALREADY EXIST")</script>';
          }
          else{
                    $query="INSERT INTO car(company,model,carnumber,price,seats,description) VALUES('$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vseats1','$vdescription1')";

                    if(mysqli_query($dbcon,$query)){

                      $query2="DELETE FROM running WHERE slno='$vslno1'";
            if(mysqli_query($dbcon,$query2)){



                      echo '<script> alert("ADDED TO CAR LIST")</script>';
                    }
                  }



                
               }
              }
            }



            ?>
           <div class="wrapper">
      <div class="title">Update Table?</div>
      <form action="" name="myform" method="post">
        <div class="field">
          <input type="text" name="username" required>
          <label>SERIAL NO:</label>
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
