<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); 
?>
<?php include("public/include/include_css.php"); ?>
<link href="../production/public/include/mdb.min.css" rel="stylesheet" />

<style>
    @font-face {
        font-family: promt;
        src: url('../docs/fonts/fonts/promt/Prompt-Regular.ttf');
    }

    .head {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    body {
        font-family: promt, "sans-serif" !important;
        color: black !important;
        background-image: url("../production/public/images/tset1.png");
        width: 100%;
        min-height: 100vh;
        justify-content: center;
        align-items: center;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        z-index: 1;
    }

    body::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .breadcrumb {
        background-color: rgba(0, 0, 0, 0.5);
        font-size: 26px;
        padding: 15px;
        background-attachment: fixed;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
        font-size: 80%;
        background-color: rgba(0, 0, 0, 0.5);
        text-align: right !important;
        border-radius: 5px !important;
    }

    .title {
        animation: fadeIn 0.5s ease-in both;
        font-size: 50px;
    }

    .layout-card {
        cursor: pointer;
        padding: 0px 100px !important;
        animation: fadeIn 1s ease-in both;
    }

    .card-img-top {
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
    }

    .card {
        border-radius: 15px;
        border: 5px solid;
        border-color: white;
        transform: scale(1);
        transition: transform 0.5s;
    }

    .card:hover {
        border-radius: 15px;
        border: 5px solid;
        border-color: white;
        transform: scale(1.1);
        transition: transform 0.5s;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
    }

    .img-profile {
        background-color: #072032;
    }

    @media(max-width : 500px) {
        .layout-card {
            cursor: pointer;
            padding: 0px 0px !important;
        }

        .title {
            font-size: 35px !important;
        }
    }

    @media(max-width : 1200px) {
        .layout-card {
            cursor: pointer;
            padding: 0px 20px !important;
        }
    }
</style>

<body>

    <div>
        <div class="head">
        <div class="text-light text-center pt-5">
            <h1 class="title">ระบบเงินนอกงบประมาณ (NBIS)</h1>
        </div>
        </div>

      

        <section id="gallery" class="pb-5">
            <div class="container item-section pt-5 ">
                <div class="row mx-auto">

                    <div class="col-lg-6 col-md-6 mb-4 mx-auto px-5 layout-card d-flex align-items-stretch">
                        <div class="card ">
                            <div class="text-center ">
                                <img src="../production/public/images/land7.png" alt="" class="card-img-top img-profile">
                                <h3 class="card-title text-center py-4 font-weight-bold">กองทุนจัดรูปที่ดิน</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4 mx-auto px-5 layout-card d-flex align-items-stretch">
                        <div class="card">
                            <div class="text-center ">
                                <img src="../production/public/images/budget6.png" alt="" class="card-img-top img-profile">
                                <h3 class="card-title text-center py-4 font-weight-bold">กองทุนหมุนเวียนเพื่อการชลประทาน</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

</body>
<div class="footer">
    <div class="py-2">© 2022 พัฒนาโดย กองการเงินเเละบัญชี ส่วนพัฒนาระบบงานคลัง</div>
</div>
</div>

</html>
<?php include("public/include/include_js.php"); ?>
<?php include("public/include/check_cookie.php"); ?>

<script>
    $(document).ready(function() {
        console.log('may tets 1')
        $("#loaderpage").addClass("loading");
        setTimeout(function() {
            $("#wellpages").fadeIn("slow");
            ajax_stop();
            getList()
        }, 1000);

    });
</script>