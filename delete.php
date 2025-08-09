<?php
include("project.php");
$id = $_GET['id'];

$nwquery ="DELETE FROM employeet WHERE id = '$id'";
$data = mysqli_query($connection, $nwquery);

if($data) {
    echo "<script>alert('record deleted')</script>";
    ?>
    
    <meta http-equiv = "refresh" content = "2; url = localhost/employee-php/display.php" />
    <?php

}
else {
    echo "failed to delete";
}
?>