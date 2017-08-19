<?php
    include('../master/connect.php');

$name = trim($_POST['name']);
$contact = trim($_POST['contact']);
$email = trim($_POST['email']);
$person = trim($_POST['person']);
$position = trim($_POST['position']);
$address = trim($_POST['address']);

   $sql = "INSERT INTO client(client_id,client_name,client_person,client_position,client_contact,client_email,client_address,status) values((select lpad (no,8,'CLI-') from client as cl where no = (select max(no) from client as p)),?,?,?,?,?,?,'active')";

  $q = $conn->prepare($sql);
  $q -> execute(array($name,$person,$position,$contact,$email,$address));

$conn = null;

echo json_encode($output);
?>

