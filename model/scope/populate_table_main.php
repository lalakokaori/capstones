<?php
    include('../master/connect.php');


  //$sql = "SELECT labor_id,category_name,labor_name,unit_name,rate FROM labor as l,unit as u,categories as c where l.status = 'active' and l.category_id=c.category_id and l.unit_id=u.unit_id ORDER BY labor_name desc";
    $sql = "SELECT * FROM scope where status='active'";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['scope_id'], $fetch['scope_name']);
  }
$conn = null;

echo json_encode($output);
?>
