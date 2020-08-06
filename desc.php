<html>
<head>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<div id="main-box">
<td align="center"><a href="2.html"><img src="home.jpg" id="home"></td>
<?php
include "db.php";
include "config.php";
$id = $_GET['id'];
$descid = $_GET['descid'];
$con = connect(host,user,password,db);
$query = "select * from courses where id=$id and descid = $descid";
$result = mysqli_query($con,$query) or die("Query Error");?>
<table id = "colleges">
<th>Stream	 </th>

<?php while($obj  = mysqli_fetch_assoc($result)): ?>
<tr>
<td><a href="desc.php?id=<?php echo  $obj["id"] ?>&desc=<?php echo $obj["descid"]?>"><?php echo $obj["courses"] ?></a></td>
</tr>

<?php endwhile; ?>
</table>
<?php close($con) ?>
</div>
</body>
</html>