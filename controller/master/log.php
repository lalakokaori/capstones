

    
   
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
?>
<?php /*
  if(!isset($_SESSION))
  { session_start(); }

  if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script type="text/javascript">
      function Redirect()
      {
        window.location="../master/login.php";
       // alert("Please Log-in");
      }
      Redirect();
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  }
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">';  */
?>

