<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h2>Registration Form</h2>
<form method="POST" action="">
<label>Name:</label>
<input type="text" name="name"><br><br>
<label>Email:</label>
<input type="email" name="email"><br><br>
<label>Password:</label>
<input type="password" name="password"><br><br>
<input type="submit" value="Register">
<input type="reset" value="Clear">
</form>
<?php
if(!empty($errors)){
echo "<h3>Validation Errors:</h3>";
foreach($errors as $error){
echo "<p style='color:red;'>".htmlspecialchars($error)."</p>";
}
}
if(!empty($success)){
echo "<h3 style='color:green;'>".htmlspecialchars($success)."</h3>";
}
?>
</body>
</html>

