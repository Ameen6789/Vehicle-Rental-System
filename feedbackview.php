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
     <a href="adminhome.php">BACK</a>
</nav>
    <?php

$user='root';
$pass='';
$db='miniproject';

$dbcon=mysqli_connect('localhost',$user,$pass,"$db");
        $result=mysqli_query($dbcon,"SELECT * from 3feedback");

        if(!$result){
            die('could not connect to mysql server:');
        }
        else{
           echo "<center><h1>Feedbacks</h1></center>";
          $rows=mysqli_num_rows($result);
  
          if($rows)
          {
              echo "<div class='table-wrapper'>";
              echo "<table border=1 class='fl-table'>
              <tr>
              <th>USERNAME:</th>
              <th>NAME</th>
              <th>FEEDBACK</th>
              
              </tr>";
            // echo "hi";
              while($row=mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>".$row['username']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['comment']."</td>";
                 
                //   echo $row['slno']."".$row['company'].$row['model'].$row['carnumber'].$row['price'].$row['seats'].$row['description'];
                  echo "</tr>";
                //   $vslno1=$row['slno'];
              }
              echo "</table>";
             echo "</div>";
            }
            
        }
    ?>
    
</body>
</html>
