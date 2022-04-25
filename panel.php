<?php
echo "<body style='background:url(try1.PNG)'>"."</body>";
$con = mysql_connect("localhost","root","");
if (!$con) {
die('could not connect: ' . mysql_error());
}

mysql_select_db("chops_hops", $con);

$result = mysql_query("select count(1) FROM orders");
$row = mysql_fetch_array($result);

$total = $row[0];
echo "<h1 style='color: white; background: grey'>You have: " . $total . "  Orders". "</h1>";

mysql_close($con);

echo"<li style='list-style-type: none; float:bottom; text-align: left;border: solid 2px black;width: 50px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='index.html'> HOME </a></li>";
?>vVv