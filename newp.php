<?php include("project.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="store-form">
        <div class="heading">
            <h1>Employee Data Form</h1>
        </div>
        <form action="#" method="POST">
            <div class="form">
                <div class="inputs">
                    <label>Full Name</label>
                    <input type="username" class="input" name="username" placeholder="enter your name">
                </div>
                <div class="inputs">
                    <label>Employee Id</label>
                    <input type="userid" class="input" name="empid" placeholder="enter your id">
                </div>
                <div class="inputs">
                    <label>Gender</label>
                    <select class="Gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="inputs">
                    <label>Phone</label>
                    <input type="user-no" class="phone" name="contact" placeholder="">
                </div>
                <div class="inputs">
                    <label class="address">Address</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
                <div class="inputs">
                    <label>Email</label>
                    <input type="username" class="name" name="emailid" placeholder="enter your email">
                </div>
                <div class="inputs">
                    <input type="checkbox" class="remember" name="Remember me" value="yes">
                    <label class="remember" name="check">Remember me</label>
                </div>


                <div class="inputs">
                   <input type="submit" value="submit" class="buttn" name="register">
                </div>
        </form>
    </div>
</body>

</html>
<?php 
 if($_POST['register'])
 {
    $username  = $_POST['username'];
    $empid   = $_POST['empid'];
    $gender= $_POST['gender'];
    $contact= $_POST['contact'];
    $address  = $_POST['address'];
    $emailid  = $_POST['emailid'];

   $query =  "INSERT INTO employeet (username,empid,gender,contact,address,emailid) VALUES('$username' , '$empid' , '$gender' , '$contact' , '$address' , '$emailid')";
   $data = mysqli_query($connection ,$query );
   if($data) {
    echo "Data inserted into database";
    ?>
     <meta http-equiv = "refresh" content = "2; url = localhost/employee-php/display.php" />

    <?php
   }
   else {
    echo "Data is notinserted into database";
   }
 }
?>