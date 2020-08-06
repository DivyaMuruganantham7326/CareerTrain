<?php
function connect($host,$user,$password,$db){
$myConnection= mysqli_connect("$host","$user","$password") or die ("could not connect to mysql"); 

mysqli_select_db($myConnection, "careertrain") or die ("no database");
return $myConnection;
}
function close($con){
mysqli_close($con) or die("MySQL Close Error");
}
/*$query = "select * from colleges";
$result = mysql_query($query) or die("Query Error");
while($row  = mysql_fetch_row($result)){
print_r($row);
}*/
?>