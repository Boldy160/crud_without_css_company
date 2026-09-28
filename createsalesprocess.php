<?php
include('connect.php');

	$name=$_POST['name'];
    $quantity=$_POST['quantity'];
	$amount=$_POST['amount'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $quantity = mysqli_real_escape_string($db_con, $_POST["quantity"]);
    $amount = mysqli_real_escape_string($db_con, $_POST["amount"]);
	
    $sqlInsert = "INSERT INTO sales(name , quantity , amount) VALUES ('$name','$quantity','$amount')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "customer Added Successfully!";
        header("Location:viewsales.php");
    }else{
        die("Something went wrong");
    }
}


    


?>