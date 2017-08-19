<?php
    include('../master/connect.php');


  $sql = "SELECT * from engineer where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();

  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['engr_id'], $fetch['engr_name'],$fetch['engr_type']);
  }
$conn = null;

echo json_encode($output);
?>
