<!DOCTYPE html>
<html>
<head>
<title>View department Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<a href="createdepartment.php">department form </a></li>
<a href="createsupplier.php">supplier form </a></li>
<a href="createsales.php">sales form </a></li>
<a href="viewdepartment.php">department info </a></li>
<a href="viewsupplier.php">supplier info </a></li>
<a href="viewsales.php">sales info </a></li>
<body>
    <center><h1>EDIT DEPARTMENT RECORD</h1></center>
        <form action="editdepartmentprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM department WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				
                     <div class="form-elemnt my-4">
			<label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name:" value="<?php echo $row["name"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="manager">manager</label>
                <input type="text" class="form-control" name="manager" placeholder="manager:" value="<?php echo $row["manager"]; ?>">
          </div><br>
			<div class="form-elemnt my-4">
			<label for="location">location</label>
                <input type="text" class="form-control" name="location" placeholder="location:" value="<?php echo $row["location"]; ?>">
            </div><br>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>admin Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>