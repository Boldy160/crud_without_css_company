<!DOCTYPE html>
<html>
<head>
<title>Supplier information</title>
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
<p style="color:red;">EDIT SUPPLIER RECORD</p>

 <form action="createsupplierprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" ><br>
   <label for="address">address:</label><br>
   <input type="text" id="address" name="address" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 <a href="parent.php">parent info </a></li>
 <a href="view.php">View info</a></li>
</center>

</body>
</html>
