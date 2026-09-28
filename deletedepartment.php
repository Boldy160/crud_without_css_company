<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM department WHERE id='$id'";
if(mysqli_query($db_con,$sql)){
    session_start();
    $_SESSION["delete"] = "customer Record Deleted Successfully!";
    header("Location:viewdepartment.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Record does not exist";
}
?>