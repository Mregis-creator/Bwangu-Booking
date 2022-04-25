<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'rejotravels_db');

// Uploads files
if (isset($_POST['register'])) 
{ 
     // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['photo']['name'];

    // destination of the file on the server
    $destination = 'C:/wamp/www/upload/upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];
     if ($_FILES['photo']['size'] > 2000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
} 
else 
{
    // move the uploaded (temporary) file to the specified destination
 if (move_uploaded_file($file, $destination)) 
 {
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$username= $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
$Gender = $_POST['Gender'];
$province = $_POST['province'];
$tprovince = $_POST['tprovince'];
$comment = $_POST['comment'];
    $sql = "INSERT INTO useraccounts(Fname, Lname, username, Email, Age, size, Gender, Province, Tprovince, comment) VALUES ('$fname', '$lname', '$username', '$email', '$age', '$size', '$Gender', '$province', '$tprovince', '$comment')";
        if (mysqli_query($conn, $sql))   
        {
               include 'RejoTravelRegisteredUsers.php';

        }
 } 
else 
  {
    echo "Failed to upload file.";
  }
}
}
?>