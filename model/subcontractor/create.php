<?php
    include('../master/connect.php');

$name = trim($_POST['sub']);
$amount = trim($_POST['amount']);
$details = trim($_POST['details']);
$billing_sched = trim($_POST['sched']);
$duration = trim($_POST['duration']);
$pnum = trim($_POST['number']);
$scope = trim($_POST['scope']);


   $sql = "INSERT INTO subcontractor(subcon_id,subcon_name,subcon_amt,subcon_contact,scope_id,subcon_duration,num_personnel,status) values((select lpad (no,6,'CT') from consultant as ct, scope as sc where no = (select max(no) from consultant as c)),?,?,?,?,?,?,?)";



  $q = $conn->prepare($sql);
  $q -> execute(array($name,$amount,$details,$scope,$duration,$pnum,'active'));


$conn = null;

echo json_encode($output);
?>

