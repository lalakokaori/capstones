<?php
    include('../master/connect.php');

$id = $_POST['id'];
$name = trim($_POST['sub']);
$amount = trim($_POST['amount']);
$details = trim($_POST['details']);
$billing_sched = trim($_POST['sched']);
$duration = trim($_POST['duration']);
$scope = trim($_POST['scope']);
$pnum = trim($_POST['number']);

  $sql = "UPDATE subcontractor SET  subcon_name=?, cont_amount=?, contact_detail=? , scope_id=? , billing_sched=? , cont_duration=? , num_personnel=?  WHERE subcon_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$amount,$details,$scope,$billing_sched,$duration,$pnum,$id));


$conn = null;

echo json_encode($output);
?>
