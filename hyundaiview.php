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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{

  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 380px;
  /* height: px; */
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
form .field input[type="submit"]{
color: #fff;
border: none;
padding-left: ;
margin-top: 10px;
font-size: 20px;
font-weight: 500;
cursor: pointer;
background: linear-gradient(-135deg, #c850c0, #4158d0);
transition: all 0.3s ease;
}
/*.button {
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
  }*/
  .topnav {
    background-color: #333;
    overflow: hidden;
  }
  
   /* Style the links inside the navigation bar  */
  .topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  */
  
   /* Change the color of links on hover  */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
   /* Add a color to the active/current link  */
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
<img src="A.jpg" alt="" srcset="" class="abc">
<?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
if(!$dbcon)
{
               die('could not connect to mysql server:');
}
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
  }







     
$bb=view();
function view()
{
  $user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
        $result=mysqli_query($dbcon,"SELECT * from car where company='hyundai'");

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
              <th>SlNO:</th>
              <th>Company</th>
              <th>Model</th>
              <th>Car Number</th>
              <th>Rent Price per Day</th>
              <th>Seats</th>
              <th>About</th>
              </tr>";
            // echo "hi";
              while($row=mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>".$row['slno']."</td>";
                  echo "<td>".$row['company']."</td>";
                  echo "<td>".$row['model']."</td>";
                  echo "<td>".$row['carnumber']."</td>";
                  echo "<td>".$row['price']."</td>";
                  echo "<td>".$row['seats']."</td>";
                  echo "<td>".$row['description']."</td>";
                //   echo $row['slno']."".$row['company'].$row['model'].$row['carnumber'].$row['price'].$row['seats'].$row['description'];
                  echo "</tr>";
                //   $vslno1=$row['slno'];
              }
              echo "</table>";
             echo "</div>";
            }
            
        }
        return(1);
      }
        if(isset($_POST['button'])){

            // echo "hi";
           

      
              $vslno=$_POST['slno'];
              $vsdate1=$_POST['sdate'];
              $vedate1=$_POST['edate'];
              $vplace2=$_POST['abc'];
              $vdriver=$_POST['driver'];

              // echo "$vdriver"; 

              // echo "$vplace2"; 
              
              // function days($vsdate,$vedate)
              // {
             
             $vsdate="";
             $vedate="";

              $vsdate=explode('-',$vsdate1);
              $syr1=$vsdate[0];
              $sday1=$vsdate[2];
              $smnth1=$vsdate[1];


              $vedate=explode('-',$vedate1);
              $eday1=$vedate[2];
              $emnth1=$vedate[1];
              $eyr1=$vedate[0];
              // echo "$eyr1";
              // echo "$eday1";
              // echo "$emnth1";

              if($sday1>$eday1 && $smnth1>$emnth1 && $syr1>$eyr1 )
              {

                echo '<script> alert("Dates Mismatched ")</script>';
                goto a;
              }
               
              if($smnth1>$emnth1 && $syr1==$eyr1 )
                  {
                    echo '<script> alert("Dates Mismatched ")</script>';
                goto a;
                  }
                    

                  if($sday1>$eday1 && $smnth1==$emnth1 && $syr1==$eyr1 )
                  {
                    
                      echo '<script> alert("Dates Mismatched ")</script>';
                      goto a;
                    }
                    if($syr1>$eyr1 )
                  {
                    
                      echo '<script> alert("Dates Mismatched ")</script>';
                      goto a;
                    }
                  
              
              

              // $interval=$vedate-$vsdate;
              // $days=floor($interval/(60*60*24));
              // echo "$interval";*/
              $vsdate=date_create("$vsdate1");
              // echo "start date:".$vsdate->format("Y-m-d")."<br>";
              $vedate=date_create("$vedate1");
              // echo "start date:".$vsdate->format("Y-m-d")."<br>";
              $diff=date_diff($vsdate,$vedate);
              $date=$diff->format("%d" )+1;
              // if($date<0)   
              // {
                
              // }
              // echo "$date";


              // echo $year;
              $result=mysqli_query($dbcon,"SELECT * from car where company='hyundai' and slno='$vslno'");
              $abc=gettype($result);
        //   echo "$abc";
        $ab="";
               $ac=$abc.$ab;
        //   echo "$ac";
        // if($result==null){
            // echo "hi";
           
        // }
        // else{

        
            if(!$result){
                // echo "hi";
                die('could not connect to mysql server:');
            }
            else{
               
               echo "hi";
                  $rows=mysqli_num_rows($result);
    //   $vslno1="";
                  if($rows)
                   {
                  // echo "2";
                          while($row=mysqli_fetch_array($result)){

                          $vslno1=$row['slno'];
                         
                          }
              
                        // echo "$vslno1";
                        
                        if($vslno1==$vslno)
                        {
                         
                            
                         
              

                            $result3=mysqli_query($dbcon,"SELECT * from car where slno=$vslno");
                            if(!$result3){
                        // echo "hi";
                                       die('could not connect to mysql server:');
                           }
                          else
                           {
                                    $rows=mysqli_num_rows($result3);
        //   $vslno1="";
                                   if($rows)
                                    {
            //   echo "2";
                                           while($row=mysqli_fetch_array($result3)){

                                                        $vslno1=$row['slno'];
                                                        $vcompany1=$row['company'];
                                                        $vmodel1=$row['model'];
                                                        $vcarnumber1=$row['carnumber'];
                                                        $vprice1=$row['price'];
                                                        $vseats1=$row['seats'];
                                                        $vdescription1=$row['description'];

                                              }
                                              // echo "$vprice1";
                                     }
                             }


                             $vsdate1= $vsdate->format("Y-m-d");
                             $vedate1=$vedate->format("Y-m-d"); 
                             $vplace22="";
                             $aa="";
                             $result4=mysqli_query($dbcon,"SELECT * from places where place='$vplace2'");
  if(!$result4){
  // echo "hi";
             die('could not connect to mysql server:');
  }
  else
  
  
  {
    
    $rows=mysqli_num_rows($result4);
    //   $vslno1="";
                               if($rows)
                                {
        //   echo "2";
                                       while($row=mysqli_fetch_array($result4)){
                                       
     
$vamount22=$row['amount'];
  $place22=$row['place'];
  

    // echo "$row['amount']";
  
    }
  }
  }
  $driverprice="";

  if($vplace2==$place22)
  {
    if($vdriver==600){

    

                          $aa=$date*$vprice1;
                          $driverprice=$date*$vdriver;
                          $aa=$aa+$vamount22+$driverprice;
  }
  else{
    $aa=$date*$vprice1;
    $aa=$aa+$vamount22;

  }
  }
                        /*  echo "<br>";
                          // echo $vsdate;
                          // echo "$vedate";
                          echo "$vsdate1";
                          echo "<br>";
                          echo "$vedate1";
                          echo "<br>";
                          echo "$aa";
                          echo "<br>";
                          echo "$vid";
                          echo "<br>";
                          echo "$vname2";
                          echo "<br>";
                          echo "$vslno";
                          echo "<br>";
                          echo "$vcompany1";
                          echo "<br>";
                          echo "$vmodel1";
                          echo "<br>";
                          echo "$vcarnumber1";
                          echo "<br>";
                          echo "$vprice1";*/

                          // echo "hi";


                          
                          $query="INSERT INTO dupcar(slno,company,model,carnumber,price,seats,description,status) VALUES('$vslno1','$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vseats1','$vdescription1','pending')";

                          if(mysqli_query($dbcon,$query)){
                            


if($vdriver==600){



                          
                          $query2="INSERT INTO request(username,name,slno,company,model,carnumber,price,sdate,edate,total,place,driver) VALUES ('$vid','$vname2','$vslno','$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vsdate1','$vedate1','$aa','$vplace2','yes')";
}
else{

  $query2="INSERT INTO request(username,name,slno,company,model,carnumber,price,sdate,edate,total,place,driver) VALUES ('$vid','$vname2','$vslno','$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vsdate1','$vedate1','$aa','$vplace2','no')";
}


                          if(mysqli_query($dbcon,$query2)){

                            if($vdriver==600){
                            

                            $query1="INSERT INTO prerequests(username,name,slno,company,model,carnumber,price,sdate,edate,total,place,driver,status) VALUES ('$vid','$vname2','$vslno','$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vsdate1','$vedate1','$aa','$vplace2','yes','pending')";
                             }
                             else
                             {
                              $query1="INSERT INTO prerequests(username,name,slno,company,model,carnumber,price,sdate,edate,total,place,driver,status) VALUES ('$vid','$vname2','$vslno','$vcompany1','$vmodel1','$vcarnumber1','$vprice1','$vsdate1','$vedate1','$aa','$vplace2','no','pending')";
                             

                             }
                             if(mysqli_query($dbcon,$query1)){
                              echo "hi";

                            $query="DELETE FROM car WHERE slno='$vslno'";
                            echo '<script> alert("Request Submitted Successfully")</script>';
                          
                            if(mysqli_query($dbcon,$query)){
                            // $cc=  view();
                            // header("Location:marutiview.php");


                            goto a;
                           
                        }
                      }
                      }
                      }
                       
                        
          

                            
                           
                        
                      
                      
                       
                        
                        
                       
                    
                   
              
            
                        
                        
           
           
       
      
      }
    }
    if($ac=="object")
    {
        echo '<script> alert("wrong Serial Number")</script>';
    }
  }
}
     
    
      
a:

        mysqli_close($dbcon);
    // }
    ?>
   
   
  <h2>ENTER THE SERIAL NUMBER OF THE VEHICLE YOU WANT TO RENT</h2>
    <div class="wrapper">
    
    <form action="" name="myform" method="post">
    
    <div class="field">
          <input type="text" name="slno"required>
          <label>Sl Number</label>
        </div>
        <div class="field"><li>Start Date</li>
          <input type="date" name="sdate" required>
          
        </div>
        <div class="field"><li>End Date</li>
          <input type="date" name="edate" required>
          
        </div>
        <br>
        <div>
        <label>Driver</label> <input type="radio" value="600" name="driver" checked>YES
          <input type="radio" value="0" name="driver" ><label>NO</label>
        </div>
        <div class="field">

        <?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
$result4=mysqli_query($dbcon,"SELECT * from places");
if(!$result4){
// echo "hi";
           die('could not connect to mysql server:');
}
else
?>
<br> <select name="abc" size=1>
  <?php

{
  
  $rows=mysqli_num_rows($result4);
  //   $vslno1="";
                             if($rows)
                              {
      //   echo "2";
                                     while($row=mysqli_fetch_array($result4)){?>
                                     
   
 <option value="<?=$row["place"];?>"><?=$row["place"];?></option>

<?php
  // echo "$row['amount']";

  }
}
}
  ?>
  </select>
  <?php
  
 
  

  // foreach ()


        ?>

</div>

        <div class="field">
        <input type="submit" value="submit" name="button">
      </div>
    </form>
    </div>

</body>
</html>
