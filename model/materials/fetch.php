<?php
    include('../master/connect.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM materials WHERE material_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ( $fetch['material_id'],$fetch['category_id'],$fetch['material_name'],$fetch['unit_id'],$fetch['rate']);
  }
$conn = null;

echo json_encode($output);
?>
