<html>
<head>
<title>Indian Cricket Players</title>
</head>
<body>
<?php
$players=array("Virat Kohli","Rohit Sharma","MS Dhoni","Hardik Pandya","Jasprit Bumrah");
echo"<table border='1' cellpadding='10'>";
echo"<tr><th>Sl.NO</th><th>Player Name</th></tr>";
$i=1;
foreach($players as $name)
{
echo"<tr>";
echo"<td>$i</td>";
echo"<td>$name</td>";
echo"</tr>";
$i++;
}
echo"</table>";
?>
</body>
</html>
