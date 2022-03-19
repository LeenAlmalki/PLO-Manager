<?php

  include 'db_connect_plo.PHP';

  if(isset($_GET['deleteID'])){
    $id= $_GET['deleteID'];


    $sql= "DELETE FROM `courses` WHERE code = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
      echo "deleted successfully";
      header('location:ManageCourseIndex.PHP');
    }else{
      echo"problem";
      die(mysqli_error($conn));
    }
  }




 ?>
