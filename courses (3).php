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
$result = mysql_query($query) or die("Query Error");?>
<table id = "colleges">
<th>Name </th>
<th>Location</th>
<th>State</th>
<th>Stream</th>
<th>Rank</th>
<?php while($obj  = mysql_fetch_object($result)): ?>
<tr>
<td><?php echo $obj->name ?></td>
<td><?php echo $obj->location ?></td>
<td><?php echo $obj->state ?></td>
<td><?php echo $obj->stream ?></td>
<td><?php echo $obj->rank ?></td>
</tr>

<?php endwhile; ?>
</table>
<?php close() ?>
</div>
</body>
</html>