<?php
$s = "localhost";
$u = "root";
$p = "";
$db = "rejotravels_db";
$con = mysqli_connect($s, $u, $p, $db);


echo"<body style='background-color: gray'>";
$Full_Names = $_POST['Full_Names'];
$Initial_Location = $_POST['Initial_Location'];
$Destination = $_POST['Destinations'];
$Mode_of_Payment = $_POST['Mode_of_Payment'];
$Phone_number = $_POST['Phone_number'];
$Additional_notes = $_POST['Additional_notes'];



$sql ="INSERT INTO travelers(Full_Names, Initial_Location, Destination, Mode_of_Payment, Phone_number, Additional_notes) VALUES('$Full_Names', '$Initial_Location', '$Destination', '$Mode_of_Payment', '$Phone_number', '$Additional_notes')";
if(mysqli_query($con, $sql))

$select = "SELECT * FROM travelers";
$res_poi = mysqli_query($con, $select);
if (mysqli_num_rows($res_poi)) 
{
	while ($rows = mysqli_fetch_assoc($res_poi))
	{
		echo "<h1 style= 'color: darkblue;'>Dear ".$rows["Full_Names"].", Your journey from ".$rows["Initial_Location"].", to ".$rows["Destination"].", was recorded and is currently being prepared for you. Kindly pay the transport cost via ".$rows["Mode_of_Payment"].", on 0783962518. We recommend that you stay with your phone number ".$rows["Phone_number"]. " as you are going to receive a call from us to confirm the completion of preparation of your travel notes. We really remember that you told us that:".$rows["Additional_notes"].", RejoTravels is excited to travel with you. Have nice adventures! </h1>".mysqli_error($con);
			}
}
		echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: green;'><a style='text-decoration: underline; color: yellow' href='RejoTravelHomePage (2).html'>Home page</a></li>";
?>
