<?php
include('connect.php');

	$name=$_POST['name'];
    $quantity=$_POST['quantity'];
	$amount=$_POST['amount'];
  
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
   $quantity = mysqli_real_escape_string($db_con, $_POST["quantity"]);
    $amount = mysqli_real_escape_string($db_con, $_POST["amount"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE sales SET name = '$name', quantity = '$quantity', amount = '$amount' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "customer Record Updated Successfully!";
        header("Location:viewsales.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






