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
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    .footer {
        background-color: rgba(0, 0, 0, 0.5);

    }
</style>

<body>
    <div id="app" class="bg" style="background-image: url(../production/public/images/bg-image.png)">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active font-weight-bold text-light" aria-current="page">
                    <h3>หนังสือเวียนอิเล็กทรอนิกส์ (EFAD - SYSTEM)</h3>
                </li>
            </ol>

        </nav>
        <!-- <section id="header" class="jumbotron text-center">
        <h1 class="display-3">FOREST</h1>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <a href="" class="btn btn-primary">Click</a>
        <a href="" class="btn btn-secondary">Click</a>
    </section> -->




        <section id="gallery">
            <div class="container pt-5">
                <div class="row mx-auto">
                    <!-- <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sunset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div> -->
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4 mx-auto card-layout">
                        <div class="card mx-auto">
                            <div class="container">
                                <div class="text-center">
                                    <h3 class="card-title text-center py-4 font-weight-bold text-light">ลงทะเบียนออนไลน์</h3>
                                    <div class="rounded-circle mt-7 dotted d-inline-block">
                                        <img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center font-weight-bold text-light">May.PGM</h5>
                                </div>

                                <div class="card-body pt-2 px-4">
                                    <form>
                                        <div class="row pb-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold mb-1 text-light">ชื่อ</label>
                                                    <div class="input-group-prepend">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold mb-1 text-light">นามสกุล</label>
                                                    <input type="text" class="form-control">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1 text-light">เลขประจำตัวประชาชน</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1 text-light">สำนัก/กอง</label>
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
                                            <label class="font-weight-bold mb-1 text-light">ส่วน/โครงการ</label>
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
                                            <label class="font-weight-bold mb-1 text-light">กลุ่ม/ฝ่าย</label>
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
                                            <label class="font-weight-bold mb-1 text-light">ตำแหน่ง</label>
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
                                            <label class="font-weight-bold mb-1 text-light">เบอร์โทร</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label class="font-weight-bold mb-1 text-light">อีเมล</label>
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
                        <!-- <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sunset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div> -->
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