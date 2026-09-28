<?php
include('connect.php');

	$name=$_POST['name'];
    $manager=$_POST['manager'];
	$location=$_POST['location'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $manager = mysqli_real_escape_string($db_con, $_POST["manager"]);
    $location = mysqli_real_escape_string($db_con, $_POST["location"]);
	
    $sqlInsert = "INSERT INTO department(name , manager , location) VALUES ('$name','$manager','$location')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "customer Added Successfully!";
        header("Location:viewdepartment.php");
    }else{
        die("Something went wrong");
    }
}


    


?>