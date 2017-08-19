
 <script src="../../plugins/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../plugins/sweetalert/dist/sweetalert.css">
  
<?php

  if(!isset($_SESSION))
  { session_start(); }

  if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script src="../../../plugins/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../plugins/sweetalert/dist/sweetalert.css">
    <script type="text/javascript">
      function Redirect()
      {
          swal({
    title: "Please Log-in",
    type: "error",
    showConfirmButton: true,
    closeOnConfirm: false},
    function(){
window.location="../../master/login.php";

  });
        
       // alert("Please Log-in");
      }
      Redirect();
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  }
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">'; 

    include('connect.php'); // CONNECTION PDO MYSQL

      //FETCH VARIABLES
    $persan_user_name =$_POST['persan_user_name'];
    $persan_user_password = $_POST['persan_user_password'];
    $persan_user_password = md5($persan_user_password);
    $persan_user_type;
    $match="false";


      // CHECK IF MATCH ACCOUNT
    $sql = "SELECT * FROM users WHERE user_stat = 'active'";
    $q = $conn->prepare($sql);
    $q -> execute();
    $browse = $q -> fetchAll();
    foreach($browse as $row)
    {
      if(($persan_user_name == $row['user_name']) && ($persan_user_password== $row['user_pass']))
      {
        $match="true";
        $persan_user_type = $row['user_type'];
        break;
      }
    }
    if($match == "true")
    {
      $_SESSION["persan_user_name"] = $persan_user_name;
      $_SESSION["persan_user_password"] = $persan_user_password;
      $_SESSION["persan_user_type"] = $persan_user_type;
      ?>

<script type="text/javascript">
function Redirect()
{
    window.location="../../index.php";
}
setTimeout('Redirect()', 0);
</script>
    <?php
    }
    else
    { ?>
<script type="text/javascript">
function Redirect()
{

//sweet alert part 
  swal({
    title: "Invalid",
    text: " Username or Password",
    type: "error",
    showConfirmButton: true,
    closeOnConfirm: false},
    function(){
    window.location="../../index.php";

  });

}
setTimeout('Redirect()', 0);
//alert("Invalid Username or Password"); 




</script>
    <?php } $conn = null; ?>
