<!DOCTYPE html>
<html lang="en">

<?php //include("include/checksession.php"); 
?>
<?php include("../../public/include/include_css.php"); ?>
<style lang="scss" scoped>
    .img-pdf {
        height: 200px;
        width: 155px;
    }

    .card {
        border-radius: 15px !important;
        box-shadow: 0 0 10px rgba(206, 212, 218, 255) !important;
        font-size: 24px !important;
    }
    .card-title{
        font-size: 24px !important;
    }

    .btn-success {
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px !important;
    }

    .card-text {
        background: #fff;
        color: #636262;
    }

    .container-card {
        width: 550px !important;
    }

    .card-header{
        background-color: rgb(76, 175, 80) !important;
        border-radius: 13px 13px 0px 0px !important;
        font-weight: bold !important;
        font-size: 26px !important;
        padding: 15px !important;
    }

    .card-heading {
        padding: 15px 0px;
        text-align: center;
        font-weight: bold;
        font-size: 24px !important;
    }

    .form-control {
        border-radius: 5px;
        border-bottom: 1px solid #E0E0E0;
        box-shadow: 0 1px 5px -2px rgba(0, 0, 0, .2);
        font-size: 24px !important;
        font-weight: bold !important;
    }

    @media(min-width: 1200px) and (max-width: 1500px) {
        .col-xl-3 {
            -ms-flex: 0 0 30% !important;
            flex: 0 0 30% !important;
            max-width: 30% !important;
        }
    }
</style>

<body class="nav-md font">
    <div class="" id="loaderpage"></div>
    <div class="container body" id="app">
        <div class="main_container">
            <?php include("../../public/include/menubar.php"); ?>
            <div class="right_col" role="main">
                <div class="row" style="min-height: 100vh">
                    <div class="col-lg-12">
                        <div class="row" id="wellpages" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="x_panel px-4">
                                    <div class="x_title">
                                        <h3 class="font-weight-bold"> ??????????????????????????????????????????????????????????????? </h3>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- <div class="x_content mx-auto "> -->

                                    <div class="row ">
                                        <div class="col-12 col-xl-3 col-lg-6 col-md-6 col-sm-6 mx-auto pt-3">
                                            <div class="card mb-3">
                                                <div class="card-header">?????????????????????????????????????????????????????????????????????</div>
                                                <div class="card-heading">
                                                    <div class="">???????????????????????????????????? ????????? ?????????. ?????????/????????????</div>
                                                    <div class=""> 1 ?????????????????? ???.???. 2565 </div>
                                                </div>
                                                <img class="mx-auto d-block img-pdf img-fluid d-block mx-auto mb-3 pt-2" src="https://fad.rid.go.th/system_dev/ideaseed/production/images/pdf_img.png">        
                                                <div class="card-body">
                                                    <h5 class="card-title font-weight-bold">???????????????????????????</h5>
                                                    <p class="card-text font-weight-bold">????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                                    <hr>
                                                    <h5 class="card-title font-weight-bold">????????????????????????</h5>
                                                    <div >
                                                        <textarea class="form-control"  rows="3"></textarea>
                                                    </div>
                                                    <div class="pt-3 row">
                                                        <div class="col-md-12 bg-light text-right">
                                                            <button class="btn w-25 pb-0 mb-0 btn btn-success">
                                                                ??????????????????
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- </div> -->
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
    </div>
</body>


</html>
<?php include("../../public/include/include_js.php"); ?>
<?php include("../../public/include/check_cookie.php"); ?>

<script>
    const {
        createApp
    } = Vue

    createApp({

        data() {
            var content = ''
            console.log('may tets 2')
            return {
                message: 'Hello Vue!',

                // vuetify: new Vuetify()
            }
        },
        methods: {
            toggle(value) {
                value.status_accept = (value.status_accept == 1) ? 2 : 1;
            }
        }

    }).mount('#app')
</script>
<script>
    $(document).ready(function() {
        $("#loaderpage").addClass("loading");
        console.log('may tets 1')
        setTimeout(function() {
            $("#wellpages").fadeIn("slow");
            ajax_stop();
            getList()
        }, 1000);

    });

    function getList() {
        console.log('_______________call function get list')
        // alert('test')
        //     $.ajax({
        //        type: 'POST',
        //        url: "insert.php",
        //        global:false,
        //        data: {
        //        },
        //        success: (response) => {
        //             console.log('res',response)s
        //             $("#insert-form")[0].reset();
        //             $('#insertModal').modal('hide');
        //             location.reload();
        //        }
        //    });
    }
</script>