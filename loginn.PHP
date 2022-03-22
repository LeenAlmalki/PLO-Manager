<?php
session_start();
include "db_connect_plo.PHP";

if (isset($_POST['Uname']) && isset($_POST['Pass'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
  $uname = validate($_POST['Uname']);
  $Pass = validate($_POST['Pass']);

  if (empty($uname)){
    header("location:loginIndex.PHP?error= Username is Required");
    exit();

  }else if(empty($Pass)){
    header("location:loginIndex.PHP?error= Password is Required");
    exit();

  }else{
    $sql="SELECT * FROM loginform where Username='".$uname."'AND Password='".$Pass."'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if ($row['Username'] === $uname && $row['Password'] === $Pass){
        $_SESSION['ID'] = $row['ID'];
          $_SESSION['Username'] = $row['Username'];
          $_SESSION['Name'] = $row['Name'];
          $_SESSION['usertype'] = $row['usertype'];
          header('location:indexMain.PHP');}
          else {
			$_SESSION['error'] = "Incorect Username or Password";
			header("location:loginIndex.PHP");
            exit();
            // code...
          }
      }else{
		$_SESSION['error'] = "Incorect Username or Password";
        header("location:loginIndex.PHP");
		exit();

      }

    }
  }
else{
  header("location:loginIndex.PHP");
  exit();
}

 ?>
