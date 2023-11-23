<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Admin <?php echo $_SESSION['AdminLoginId']?></h1>

<table id="customers">
  <tr>
    <th>Name & Surname</th>
    <th>Phone Number</th>
    <th>E-mail</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
 
 <?php
 include('db_connection.php');

$select="Select * From contact";

$result1=$con->query($select);

if ($result1->num_rows>0)
{
 while($pull=$result1->fetch_assoc())
{
echo " <tr>
    <td>".$pull['name']."</td>
    <td>".$pull['phone']."</td>
    <td>".$pull['email']."</td>
    <td>".$pull['subject']."</td>
    <td>".$pull['message']."</td>
  </tr>";
}


 }

 
?>

</table>

</body>
</html>


