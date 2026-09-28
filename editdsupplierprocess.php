<?php
include('connect.php');

	$name=$_POST['name'];
    $phone=$_POST['phone'];
	$address=$_POST['address'];
  
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
   $phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE supplier SET name = '$name', phone = '$phone', address = '$address' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "customer Record Updated Successfully!";
        header("Location:viewsupplier.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






