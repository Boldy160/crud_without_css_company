<!DOCTYPE html>
<html>
<head>
<title>View Department Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<a href="createdepartment.php">department form </a></li>
<a href="createsupplier.php">supplier form </a></li>
<a href="createsales.php">sales form </a></li>
<a href="viewdepartment.php">department info </a></li>
<a href="viewsupplier.php">supplier info </a></li>
<a href="viewsales.php">sales info </a></li>
<center><h1>DEPARTMENT DETAILS</h1></center>
   
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name</th>
 <th>manager </th>
 <th>location</th>
<th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from department");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['manager']);?></td>
                                            <td><?php echo htmlentities($row['location']);?></td>
                                           <td>
                    
                    <a href="editdepartment.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletedepartment.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

