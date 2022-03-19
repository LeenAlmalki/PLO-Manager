<?php

  include 'db_connect_plo.PHP';

  if(isset($_GET['deleteID'])){
    $id= $_GET['deleteID'];


    $sql= "DELETE FROM `plo` WHERE ID = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
      echo "deleted successfully";
      header('location:PLO_managerIndex.PHP');
    }else{
      echo"problem";
      die(mysqli_error($conn));
    }
  }




 ?>
