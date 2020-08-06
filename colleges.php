<html>
<head>
<link rel="stylesheet" href="main.css" />
</head>
<body>
<div id="main-box">
<td align="center"><a href="3.html"><img src="home.jpg" id="home"></td>
<?php
$id = $_GET['id'];
include "db.php";
include "config.php";

$con = connect(host,user,password,db);
$query = "select * from colleges where id=$id";
$result = mysqli_query($con, $query) or die("Query Error");

?>
<table id = "colleges">
<tr>
<th>Name </th>
<th>Location</th>
<th>State</th>
<th>Stream</th>
<th>Rank</th>
</tr>
<tr>


<?php while($ob  = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?php echo $ob["name"] ?></td>
<td><?php echo $ob["location"] ?></td>
<td><?php echo $ob["state"] ?></td>
<td><?php echo $ob["stream"] ?></td>
<td><?php echo $ob["rank"] ?></td>
</tr>

<?php endwhile; ?>
</tr>
</table>
<?php close($con) ?>
</div>
</body>
</html>