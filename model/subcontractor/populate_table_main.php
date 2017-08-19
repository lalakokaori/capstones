<?php
    include('../master/connect.php');


    $sql = "SELECT subcon_id,subcon_name,subcon_amt,subcon_contact,scope_id,subcon_duration,num_personnel from subcontractor where status='active' order by subcon_name";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['subcon_id'], $fetch['subcon_name'],$fetch['subcon_amt'], $fetch['subcon_contact'], $fetch['scope_id'],$fetch['subcon_duration'],$fetch['num_personnel']);
  }
$conn = null;

echo json_encode($output);
?>