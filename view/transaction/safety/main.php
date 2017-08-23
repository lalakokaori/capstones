<?php
  if(!isset($_SESSION))
  { session_start(); }
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


  if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script type="text/javascript">
      function Redirect()
      {
        window.location="view/master/login.php";
       // alert("Please Log-in");
      }
      Redirect();
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">';
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>


<?php include("../../../view/master/design_sidebar.php");//header and design ?>

<!--**********************************-->
                   <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Safety Inspection Checklist</h4>
                    </div>
                    </div>
                        
                    </div>
            </div>


            

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>


                    

                     

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Code <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Code-</option>
                        </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      

                      

                       <label>1.) Office trailer with power, secure site location and neat?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>2.)Storage trailer(s) or Warehouse, secure site location and neat?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>3.)Injury records being kept? Injury handling procedures established?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>


                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>4.) Telephone, fax line & dedicated computer line? <span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>5.) Sanitary facilities are well maintained?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>6.) Water available? (drinking, testing, dust control, personal use ).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>7.) Site communications ( radios, etc.).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>8.) Office equipment ( telephone, fax machine, copier, etc. ).<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>9.) Office furnishings ( desk, chair's, filing cabinet, print table, etc. )<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>10.) Permits/licenses/Certificate of Insurance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>11.) Nail, boards, debris removed?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>12.) Regular disposal of wastes? Waste containers provided?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>13.) Warnings signs and safety signs complete and posted?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>14.) Hazard lights utilized?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>15.) Delivery address and unloading point for material?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>16.) Safety needs ( please check first aid kits, medical facilities location)<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>17.) Open ditches, drop offs protected? Ladders lowered?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>18.) MSDS for received hazardous wastes? Control/disposal established?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>19.) Fire extinguishers available and inspected?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>20.) Flammable liquids in secure container/storage?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>

                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>21.) Established equipment fueling method (turn off/grounded)?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>22.) PPEs adequate and utilized? (face, head, eye, hand, foot protection)?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>23.) Safety orientations conducted to all employees<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>24.) Equipment had undergone preventive maintenance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>25.) Materials properly stored/stacked? Inventories updated?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>

                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>26.) Proper tool being used? Stored after use? Grounded properly?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>27.) Equipment had undergone preventive maintenance?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>28.) Materials properly stored/stacked? Inventories updated?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>29.) Proper tool being used? Stored after use? Grounded properly?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>30.) All operators qualified? Complies with local laws and ordinances?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>31.) Roads sidewalks protected? Adjacent structures properly shored?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>32.) Barricades or covers installed?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>33.) Excavation barricaded and lighting provided?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>34.) Seat belts available? Lights, brakes, warning signals operative?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>35.) Oily rag containers used and emptied daily at garage/repair shops?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>36.) Adequate lighting and ventilation for repair shop and warehouse?<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                       <label>OTHERS:<span class="required"></span>
                        </label>
                        &emsp;&emsp;&emsp;
                        <br> &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Needs Improvement</label>
                                <input type="checkbox" id="basic_checkbox_1"  />
                                <label for="basic_checkbox_1">Non-Compliant</label>
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in"  />
                                <label for="basic_checkbox_2">Not Applicable</label>
                                <br>


                                
                           
    

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->

