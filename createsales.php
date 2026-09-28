<!DOCTYPE html>
<html>
<head>
<title>sales information</title>
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
<p style="color:red;">EDIT SALES RECORD</p>

 <form action="createsalesprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="quantity">quantity:</label><br>
  <input type="text" id="quantity" name="quantity" ><br>
   <label for="amount">amount:</label><br>
   <input type="text" id="amount" name="amount" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 <a href="parent.php">parent info </a></li>
 <a href="view.php">View info</a></li>
</center>

</body>
</html>
