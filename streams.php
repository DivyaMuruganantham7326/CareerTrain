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

$con = connect(host,user,password,db);
$query = "select * from streams";
$result = mysql_query($query) or die("Query Error");?>
<table id = "colleges">
<th>Stream	 </th>

<?php while($obj  = mysql_fetch_object($result)): ?>
<tr>
<td><a href="listcourses.php?id=<?php echo  $obj->id ?>"><?php echo $obj->stream ?></a></td>
</tr>

<?php endwhile; ?>
</table>
<?php close() ?>
</div>
</body>
</html>