<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); ?>
<?php include("../../public/include/include_css.php"); ?>

<body class="nav-md">
    <div class="" id="loaderpage"></div>
    <div class="container body">
        <div class="main_container">
            <?php include("../../public/include/menubar.php"); ?>
                <div class="right_col" role="main">
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="row" id="wellpages" style="display: none;">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>แบบ จด.01</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <button type="button" class="btn btn-primary" onclick="insertjd()"><i class="fa fa-edit"></i> จัดการแบบ จด.01</button>
                                                    <!--<button type="button" class="btn btn-warning" onclick="editjd()"><i class="fa fa-edit"></i> แก้ไขแบบ จด.01</button>-->
                                                    <button type="button" class="btn btn-danger" onclick="deletejd()"><i class="fa fa-trash"></i> ลบแบบ จด.01</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>ข้อมูลตามแบบ จด.01</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    ไม่พบข้อมูล
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php include("../../public/include/footer.php"); ?>
        </div>
    </div>
</body>
</html>
<?php include("../../public/include/include_js.php"); ?>
<?php include("../../public/include/check_cookie.php"); ?>

<script>
$(document).ready(function() {
    $( "#loaderpage" ).addClass( "loading" );
    setTimeout(function(){ 
        $("#wellpages").fadeIn( "slow" );
        ajax_stop();
        $('#tableAlert2').DataTable( {
               destroy: true,
               searching: true,
               responsive: true,
           });
    }, 1000);
 
});
function insertjd(){
    window.location = "../InsertJD1/";
}
function editjd(){
    window.location = "../EditJD1/";
}
function deletejd(){

}
</script>

