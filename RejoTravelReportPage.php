<?php
$s="localhost";
$u="root";
$p= "";
$db="rejotravels_db";
$con= mysqli_connect($s,$u,$p,$db);
if(!$con){
die("connection fail, re-visit your codes");
}

echo "<br>";
   echo " <h1 style='text-align: center; background-color:#1F618D ; width: 92%; margin-left: 0%; align-content: left; margin-right: 0%; border-radius: 5px; font-style: verdana; color: white ;'>A report of people who booked tickets with RejoTravels</h1> ";
   echo "<br>";
   echo "<br>";
$sql = "SELECT Full_Names, Initial_Location, Destination, Mode_of_Payment, Phone_number, Additional_notes FROM travelers";
$result = mysqli_query($con,$sql);
?>

<table border="1" cellspacing="0" cellpadding="15" bgcolor="silver ">
  <tr bgcolor="skyblue" >
    <th>Full_Names</th>
    <th>Initial_Location</th>
    <th>Destination</th>
    <th>Mode_of_Payment</th>
    <th>Phone_number</th>
    <th>Additional_notes</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  //$sn=1;
  while($rows=mysqli_fetch_assoc($result)) {
    echo "<body style='background-color: darkgreen  '>";
 ?>

 <tr>

   <td><?php echo $rows['Full_Names']; ?> </td>
   <td><?php echo $rows['Initial_Location']; ?> </td>
   <td><?php echo $rows['Destination']; ?> </td>
   <td><?php echo $rows['Mode_of_Payment']; ?> </td>
   <td><?php echo $rows['Phone_number']; ?> </td>
   <td><?php echo $rows['Additional_notes']; ?> </td>

 <tr>
 <?php
  //$sn++;
}} else { ?>
    <tr>
     <td colspan="4">No data found</td>
    </tr>
 <?php } ?>
 </table>
