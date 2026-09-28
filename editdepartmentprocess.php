<?php
include('connect.php');

	$name=$_POST['name'];
    $manager=$_POST['manager'];
	$location=$_POST['location'];
  
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
   $manager = mysqli_real_escape_string($db_con, $_POST["manager"]);
    $location = mysqli_real_escape_string($db_con, $_POST["location"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE department SET name = '$name', manager = '$manager', location = '$location' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "customer Record Updated Successfully!";
        header("Location:viewdepartment.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






