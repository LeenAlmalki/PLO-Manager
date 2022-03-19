<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "PLO Achiviement";
// Create connection
$link = mysqli_connect($servername,$username,$password,$dbName);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO Courses(code, title, level, deptID) VALUES ('".$_POST['Course_code']."', '".$_POST['Course_title']."', '".$_POST['Course_level']."', 'COE_CS')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
