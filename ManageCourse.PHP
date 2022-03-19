<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "db_connect_plo.PHP";

// Attempt insert query execution
$sql = "INSERT INTO Courses(code, title, level, deptID) VALUES ('".$_POST['Course_code']."', '".$_POST['Course_title']."', '".$_POST['Course_level']."', 'COE_CS')";
if(mysqli_query($conn, $sql)){

  header ("location : ManageCourseIndex.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
