<html>
<head>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<div id="main-box">
<td><a href="4_1.html"><img src="prev.png" id="prev-img"></td>
<td><a href="2.html"><img src="home.jpg" id="home"></td>
<?php
$id = $_GET['id'];
include "db.php";
include "config.php";

$con = connect(host,user,password,db);
$query = "select * from courses where id=$id";
$result = mysqli_query($con,$query) or die("Query Error");?>
<table id = "colleges">
<th>Stream </th>
<th>Course</th>
<?php while($obj  = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?php echo $obj["stream"] ?></td>
<td><?php echo $obj["courses"] ?></td>

</tr>

<?php endwhile; ?>
</table>
<?php close($con) ?>
</div>
</body>
</html>