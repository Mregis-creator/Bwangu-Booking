<?php 
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'data_db');
$sql = "SELECT name FROM files";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result))
{
	while ($rows = mysqli_fetch_assoc($result)) 

	{


echo '<tr>  
        <td>  
            <img src="C:/wamp/www/Upload/Upload/'.base64_encode($rows['name'] ).'" height="350" width="550" />  
        </td>  
        </tr>';  
}
}
else
	{
		echo "No";
	}
?>
