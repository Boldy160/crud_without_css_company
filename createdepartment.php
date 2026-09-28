<!DOCTYPE html>
<html>
<head>
<title>department information</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powdergreen;}
</style>
<body>
<center>
<a href="createdepartment.php">department form </a></li>
<a href="createsupplier.php">supplier form </a></li>
<a href="createsales.php">sales form </a></li>
<a href="viewdepartment.php">department info </a></li>
<a href="viewsupplier.php">supplier info </a></li>
<a href="viewsales.php">sales info </a></li>
<p style="color:red;">EDIT DEPARTMENT RECORD</p>

 <form action="createdepartmentprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="manager">manager:</label><br>
  <input type="text" id="manager" name="manager" ><br>
   <label for="location">location:</label><br>
   <input type="text" id="location" name="location" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 <a href="parent.php">parent info </a></li>
 <a href="view.php">View info</a></li>
</center>

</body>
</html>
