<?php
    include('../master/connect.php');


  $sql = "SELECT * from client where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['client_id'], $fetch['client_name'],$fetch['client_person'],$fetch['client_position'],$fetch['client_contact'],$fetch['client_email'],$fetch['client_address']);
  }
$conn = null;

echo json_encode($output);
?>
