<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "db_connect_plo.PHP";

// Attempt insert query execution
$sql = "INSERT INTO Faculty(ID, name, phone, specilization, deptID) VALUES ('".$_POST['Faculty_ID']."', '".$_POST['Faculty_Name']."', '".$_POST['Phone_Number']."', '".$_POST['Specialization']."', 'COE_CS')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
