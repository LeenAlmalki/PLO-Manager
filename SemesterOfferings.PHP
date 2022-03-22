<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "db_connect_plo.PHP";

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$msg="Submit the records";
// Attempt insert query execution
$sql = "INSERT INTO Semester_Offering(year, semester,facultyID,courseID) VALUES ('".$_POST['YearOffers']."', '".$_POST['SemesterOffers']."', '".$_POST['FacultyOffers']."', '".$_POST['CourseOffers']."')";
$result = mysqli_query($conn, $sql);
  if($result){
  	$msg = "Records inserted successfully.";
  }else{
  	$msg = "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  ?>
  <?php
  include "PLO_managerIndex.PHP";
  ?>
  <body>
    <h3><?php echo $msg; ?></h3>
  </body>
</html>




<?php
// Close connection
mysqli_close($conn);
?>
