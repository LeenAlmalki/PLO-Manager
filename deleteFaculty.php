<?php

  include 'db_connect_plo.PHP';

  if(isset($_GET['deleteID'])){
    $id= $_GET['deleteID'];


    $sql= "DELETE FROM `Faculty` WHERE ID= '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
      echo "deleted successfully";
      header('location:ManageFacultyIndex.PHP');
    }else{
      echo"problem";
      die(mysqli_error($conn));
    }
  }




 ?>
