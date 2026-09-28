<?php
include('connect.php');

	$name=$_POST['name'];
    $phone=$_POST['phone'];
	$address=$_POST['address'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $phone = mysqli_real_escape_string($db_con, $_POST["phone"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	
    $sqlInsert = "INSERT INTO supplier(name , phone , address) VALUES ('$name','$phone','$address')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "customer Added Successfully!";
        header("Location:viewsupplier.php");
    }else{
        die("Something went wrong");
    }
}


    


?>