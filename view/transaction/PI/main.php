<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>

<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>

     <!-- HEADER END-->
                <!--**********************************-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project Engineer</h4>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="reset();">
                              Insert Daily Report
                            </button><br/><br/>
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="reset();">
                             Insert Weekly Report
                            </button><br/><br/>
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="reset();">
                             Insert Monthly Report
                            </button>


                        </div>
                </div>
            </div>
    <script src="../../../controller/scope.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
