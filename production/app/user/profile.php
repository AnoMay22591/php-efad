<!DOCTYPE html>
<html lang="en">

<?php //include("include/checksession.php"); 
?>
<?php include("../../public/include/include_css.php"); ?>
<style lang="scss" scoped>
    .size-font {
        font-size: 28px !important;
        color: black;
        font-weight: bold;
    }

    .card {
        border-radius: 15px !important;
        box-shadow: 0 0 10px rgba(206, 212, 218, 255) !important;

    }

    .card .text-head {
        font-size: 28px !important;
        color: black;
        font-weight: bold;
    }

    .card .text-name {
        font-size: 26px !important;
        color: black;
        font-weight: bold;
    }

    .card .text-sub {
        font-size: 24px !important;
        color: black;
        font-weight: bold;
    }

    .tp-form {
        font-size: 21px !important;
    }

    .form-control {
        font-size: 22px !important;
        font-weight: bold;
        padding: 0px 0px 0px 0px;
        /* border-radius: 5px; */
        border: 0;
        height: 35px;
        border-bottom: 1px solid black;
        /* box-shadow: 0 1px 5px -2px rgba(0, 0, 0, .2); */
    }

    .form-control:focus {
        font-size: 22px !important;
        font-weight: bold;
        /* padding: 0px 10px; */
        /* border-radius: 5px; */
        box-shadow: 0 1px 5px -2px #42A5F5;
        border-bottom: 2px solid #2196F3;
    }

    .Icon-outside {
        position: relative;
    }

    .Icon-outside i {
        position: absolute;
        margin-left: -6px;
        top: 4px;
        padding: 17px 15px;
        color: #30A3F1;
        background: black;
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
                                        <h3 class="font-weight-bold"> ข้อมูลส่วนตัว </h3>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-12 col-md-4 pb-4">
                                                <div class="card  rounded shadow-sm border-0 ">
                                                    <div class="card-body px-4 pb-3  text-center">
                                                        <div class="card-heading">
                                                            <div class="text-head"> กองการเงินเเละบัญชี </div>
                                                            <!-- <div class=""> test </div> -->
                                                        </div>
                                                        <div class="py-3">
                                                            <img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm mx-auto d-block">
                                                        </div>

                                                        <!-- <div class="card-heading text-left pb-0">เรื่อง</div> -->

                                                        <div class="text-name">
                                                            อโณทัย อรุณทอง
                                                        </div>

                                                        <div class="text-sub">
                                                            ส่วนพัฒนาระบบงานคลัง / นักวิชาการคอมพิวเตอร์
                                                        </div>
                                                        <hr class="profile">
                                                        <!-- <div class="pt-6">
                                                            <div class="row">
                                                                <div class="col-12 col-xl-4 col-lg-6 col-md-4">
                                                                    <div>
                                                                        <img src="../production/public/images/folder-blue.f2a0a032.svg" height="106" max-width="141" class="">
                                                                        <div class="display-list">
                                                                            <p class="mb-0 ml-6">
                                                                                รายการทั้งหมด
                                                                            </p>
                                                                            <p class="mb-0">
                                                                               10 รายการ
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-xl-4 col-lg-6 col-md-4">
                                                                    <div>
                                                                        <img src="../production/public/images/folder-green.3bc0a33b.svg" height="106" max-width="141" class="">
                                                                        <div class="display-list">
                                                                            <p class="mb-0 ml-6">
                                                                                 รายการแล้วเสร็จ
                                                                            </p>
                                                                            <p class="mb-0">
                                                                               10 รายการ
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-xl-4 col-lg-6 col-md-4">
                                                                    <div>
                                                                        <img src="../production/public/images/folder-yellow.d553d1c6.svg" height="106" max-width="141" class="">
                                                                        <div class="display-list">
                                                                            <p class="mb-0 ml-6">
                                                                                กำลังดำเนินการ
                                                                            </p>
                                                                            <p class="mb-0">
                                                                               10 รายการ
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="card-footer bg-transparent mt-auto border-0 p-0 pt-2">
                                                      
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="card  rounded shadow-sm border-0 ">
                                                    <div class="card-body px-4 pb-3  text-center">
                                                        <div class="card-heading">
                                                            <div class="text-head pt-3 pb-4"> แก้ไขข้อมูลส่วนตัว
                                                                <hr>
                                                            </div>

                                                        </div>


                                                        <div class="card-text text-left">


                                                            <form class="tp-form">
                                                                <div class="row pb-2">
                                                                    <div class="col-lg-6">

                                                                        <div class="form-group ">
                                                                            <label class="font-weight-bold mb-0 ">ชื่อ</label>

                                                                            <!-- <div class="Icon-outside"> -->
                                                                            <input type="text" class="form-control">
                                                                            <!-- <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i> -->
                                                                            <!-- </div> -->


                                                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="font-weight-bold mb-0 ">นามสกุล</label>
                                                                            <input type="text" class="form-control">
                                                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row pb-2 ">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">เลขประจำตัวประชาชน</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row pb-2 ">
                                                                    <div class="col-12 col-md-4">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">สำนัก/กอง</label>
                                                                            <select class="form-control">
                                                                                <option>Default select</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-md-4">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">ส่วน/โครงการ</label>
                                                                            <select class="form-control">
                                                                                <option>Default select</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">กลุ่ม/ฝ่าย</label>
                                                                            <select class="form-control">
                                                                                <option>Default select</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="row pb-2 ">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">ตำแหน่ง</label>
                                                                            <select class="form-control">
                                                                                <option>Default select</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group pb-2">
                                                                            <label class="font-weight-bold mb-0 ">เบอร์โทร</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="form-group pb-2">
                                                                    <label class="font-weight-bold mb-0 ">อีเมล</label>
                                                                    <input type="email" class="form-control">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col text-center pt-2">
                                                                        <button type="submit" class="btn btn-lg btn-primary font-weight-bold">อัพเดตข้อมูล</button>
                                                                    </div>
                                                                </div>
                                                            </form>




                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                                    <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>

                                                </div> -->
                                            </div>
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
    </div>
</body>


</html>
<?php include("../../public/include/include_js.php"); ?>
<?php include("../../public/include/check_cookie.php"); ?>

<script>
    $(document).ready(function() {
        $("#loaderpage").addClass("loading");
        setTimeout(function() {
            $("#wellpages").fadeIn("slow");
            ajax_stop();
        }, 1000);

    });
</script>