<!DOCTYPE html>
<html><head>
<title>odd or even</title>
</head>
<body>
<h2>odd or even checker</h2>
<form method="post">
Enter a number:
<input type="number"
name="num"required>
<input type="submit"name="submit"value="check">
</form>
<?php
if(isset($_POST['submit'])){
$num=$_POST['num'];
if($num % 2 ==0){
echo "$num is Even";
}
else{
echo "$num is odd";
}
}
?>

</body>
</html>
