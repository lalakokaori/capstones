<?php
    include('../master/connect.php');

$id = $_POST['id'];
$name = trim($_POST['name']);
$contact = trim($_POST['contact']);
$person = trim($_POST['person']);
$position = trim($_POST['position']);
$email = trim($_POST['email']);
$address = trim($_POST['address']);


  $sql = "UPDATE client SET client_name=?,client_person=?,client_position=?, client_contact=? , client_email=? , client_address=? WHERE client_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($name,$person,$position,$contact,$email,$address,$id));

$conn = null;

echo json_encode($output);
?>
	