<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); ?>
<?php include("public/include/include_css.php"); ?>

<body class="nav-md">
    <div class="" id="loaderpage"></div>
    <div class="container body">
        <div class="main_container">
            <?php include("public/include/menubar.php"); ?>
                <div class="right_col" role="main">
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="row" id="wellpages" style="display: none;">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>ผลรวsม</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button type="button" class="btn btn-primary">Primary</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php include("public/include/footer.php"); ?>
        </div>
    </div>
</body>
</html>
<?php include("public/include/include_js.php"); ?>
<?php include("public/include/check_cookie.php"); ?>

<script>
$(document).ready(function() {
    $( "#loaderpage" ).addClass( "loading" );
    setTimeout(function(){ 
        $("#wellpages").fadeIn( "slow" );
        ajax_stop();
    }, 1000);
 
});

</script>

