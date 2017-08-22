<?php include('../../../controller/master/log.php');


?>
<style type="text/css">
    no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(../../../assets/img/2.gif) center no-repeat #fff;
}
</style>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
    <!-- LOGO HEADER END-->
  <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project</h4>
                    </div>
                    </div>

                    

                    <!-- start project list -->
                    <table id="table_main"  class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Project Name</th>
                          <th>Team Members</th>
                          <th>Project Progress</th>
                          <th>Status</th>
                          <th style="width: 20%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                      </tbody>
                    </table>
                    <!-- end project list -->





    <script src="../../../controller/project.js" type="text/javascript"></script>

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
