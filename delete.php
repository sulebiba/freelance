<?php
ob_start();
include("session.php");
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
    
$delete = mysqli_query($db,"DELETE FROM user WHERE id=$id");
header("location:remove_user.php");
ob_end_flush();
}
?>