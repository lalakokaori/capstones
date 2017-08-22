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
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Contract Monitoring System </title>
    <!-- BOOTSTRAP CORE STYLE -->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../../../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="../../../plugins/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../plugins/sweetalert/dist/sweetalert.css">
     <!--JQUERY BELOW-->
    <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!--Datatables BELOW-->
    <script src="../../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <!--Datatables Bootsrap CSS BELOW -->
    <script src="../../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!--Datatables Javascript BELLOW -->
    <link href="../../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <script src="../../../controller/master/logout.js" type="text/javascript"></script>

  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../plugins2/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Dropzone Css -->
    <link href="../../../plugins2/dropzone/dropzone.css" rel="stylesheet">

</head>
<body>

    <!-- HEADER END-->
   <?php include("../../../view/master/design_sidebar.php");//header and design ?>
    <!-- LOGO HEADER END-->
   

    <!-- MENU SECTION END-->
  <!--  <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">EQUIPMENT</h4>

                </div>

            </div>
            <div class="row">-->

<!--**********************************-->
                   
<section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    Photo Gallery
                    
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-1.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-2.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-3.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-4.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-5.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-6.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-7.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../../images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="../../../images/image-gallery/thumb/thumb-8.jpg">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Jquery Core Js -->


    <!-- Dropzone Plugin Js -->
    <script src="../../../plugins2/dropzone/dropzone.js"></script>

    

    <!-- Demo Js -->
    <script src="../../../js/demo.js"></script>
            

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Persan Construction Inc. | By : Students of Polytechnic University of San Juan Campus
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->

    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../../../assets/js/bootstrap.js"></script>



   


<script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
</body>
</html>

<!---->
