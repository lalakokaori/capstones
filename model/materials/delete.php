<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE materials SET status = 'inactive' WHERE material_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
