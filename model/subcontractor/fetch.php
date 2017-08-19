<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM subcontractor WHERE subcon_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ( $fetch['subcon_name'],$fetch['cont_amount'], $fetch['contact_detail'], $fetch['scope_id'], $fetch['billing_sched'],$fetch['cont_duration'],$fetch['num_personnel']); 
  }
$conn = null;

echo json_encode($output);
?>
