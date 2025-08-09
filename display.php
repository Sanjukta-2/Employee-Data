<html>
 <head>
  <title> Display</title>
 
 <style>
  body {

  background-color: white;
}
table {
  background-color:aqua;
}
.updation {
  background-color: lightgreen;
  width: 80px;
  color: white;
  border-radius:4px;
}
.deletation {
  background-color: red;
  width: 80px;
  color: white;
  border-radius:4px;
}

</style>
</head>
</html>
<?php
include("project.php");
error_reporting(0);
$query = "SELECT * FROM employeet";
$data = mysqli_query($connection, $query);
$res = mysqli_num_rows($data);

if ($res != 0)
 {
?>
<h2 align= "center">Display Employee Records</h2>
<center>
  <table border="3" width="90%">
  <tr>
      <th width="2%">Id</th>
      <th width="8%">Username</th>
      <th width="7%">Emp-id</th>
      <th width="8%">Gender</th>
      <th width="10%">Contact</th>
      <th width="25%">Address</th>
      <th width="15%">Email-id</th>
      <th width="15%">Options</th>
    </tr>
    

  <?php
  while ($result = mysqli_fetch_assoc($data)) {
    echo "<tr>
    <td>".$result['id']."</td>
    <td>".$result['username']."</td>
    <td>".$result['empid']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['contact']."</td>
    <td>".$result['address']."</td>
    <td>".$result['emailid']."</td>
    <td><a href='update.php? id=$result[id]'><input type='update' value='update' class='updation'></a>
    <a href='delete.php? id=$result[id]'><input type='delete' value='delete' class='deletation' onclick='return checkdelete()'></a>
    </td>
  
  
    </tr>";
   }
}
 else {
  echo "record is not here";
}

  ?>
 </table>
</center>

 <script>
  function checkdelete() {
    return confirm('Do you want to delete?');
  }

 </script>