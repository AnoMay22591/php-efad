<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); 
?>
<?php include("../../public/include/include_css.php"); ?>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" /> -->
<!-- <script src="https://unpkg.com/vue@3"></script> -->
<style lang="scss" scoped>
    /* #header {
        background: url(https://images.unsplash.com/photo-1415795854641-f4a487a0fdc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) center center / cover no-repeat;
    } */
    /* #bg {
        background: url(../production/puclic/images/tset1.png) center center / cover no-repeat;
    } */

    .bg {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;


        /* background:linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) !important */
    }

    .breadcrumb {
        background-color: rgba(0, 0, 0, 0.5);
        font-size: 26px;
        padding: 15px;
        background-attachment: fixed;
    }

    .img-profile {
        border-radius: 50% !important;
        min-width: 200px !important;
        max-width: 200px !important;
        min-height: 200px !important;
        max-height: 200px !important;
    }

    .form-control {
        border-radius: 5px;
        border-bottom: 1px solid #E0E0E0;
        box-shadow: 0 1px 5px -2px rgba(0, 0, 0, .2);
        font-size: 24px !important;
        font-weight: bold !important;
    }

    .form-control:focus {
        border-radius: 5px;
        box-shadow: 0 1px 5px -2px #42A5F5;
        border-bottom: 2px solid #2196F3;
    }

    .card-layout {
        padding: 0px 20px;
        padding-bottom: 90px;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.6);
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        font-size: 24px !important;
    }
    .card-title{
        font-size: 26px !important;
        font-weight: bold;
    }
    .footer {
        background-color: rgba(0, 0, 0, 0.5);

    }

    .btn-primary {
        font-size: 24px;
        font-weight: bold;
        padding: 5px 35px!important;
        border-radius: 5px !important;
    }

</style>

<body>
    <div id="app" class="bg" style="background-image: url(../production/public/images/bg-image.png)">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bold text-light" aria-current="page">
                    <h3 class="font-weight-bold">หนังสือเวียนอิเล็กทรอนิกส์ (EFAD - SYSTEM)</h3>
                </li>
            </ol>

        </nav>

        <section id="gallery">
            <div class="container pt-5">
                <div class="row mx-auto">
                  
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4 mx-auto card-layout">
                        <div class="card mx-auto">
                            <div class="container">
                                <div class="text-center">
                                    <h3 class="card-title text-center py-4 font-weight-bold">ลงทะเบียนออนไลน์</h3>
                                    <div class="rounded-circle mt-7 dotted d-inline-block">
                                        <img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center font-weight-bold">May.PGM</h5>
                                </div>

                                <div class="card-body pt-2 px-4">
                                    <form>
                                        <div class="row pb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold mb-1">ชื่อ</label>
                                                    <div class="input-group-prepend">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold mb-1">นามสกุล</label>
                                                    <input type="text" class="form-control">
                                                 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">เลขประจำตัวประชาชน</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">สำนัก/กอง</label>
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">ส่วน/โครงการ</label>
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">กลุ่ม/ฝ่าย</label>
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">ตำแหน่ง</label>
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">เบอร์โทร</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1">อีเมล</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col text-center pt-2">
                                                <button type="submit" class="btn btn-lg btn-primary font-weight-bold">ลงทะเบียน</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="footer">
            <div class="py-2 px-2 text-right text-light">© 2022 พัฒนาโดย กองการเงินเเละบัญชี ส่วนพัฒนาระบบงานคลัง</div>
        </div>
    </div>

</body>

</html>
<?php include("../../public/include/include_js.php"); ?>
<?php include("../../public/include/check_cookie.php"); ?>

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
        //             console.log('res',response)
        //             $("#insert-form")[0].reset();
        //             $('#insertModal').modal('hide');
        //             location.reload();
        //        }
        //    });
    }
</script>
<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            console.log('may tets 2')
            return {
                message: 'Hello Vue!'
            }
        }
    }).mount('#app')
</script>