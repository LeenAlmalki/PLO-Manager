<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

include "db_connect_plo.PHP";

// Attempt insert query execution
$sql1 = "INSERT INTO Semester_Offering(year, semester,facultyID,courseID) VALUES ('".$_POST['YearOffers']."', '".$_POST['SemesterOffers']."', '".$_POST['FacultyOffers']."', '".$_POST['CourseOffers']."')";
if(mysqli_query($conn, $sql1)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
