<!DOCTYPE html>
<html lang="en">

<?php //include("include/checksession.php"); 
?>
<?php include("../../public/include/include_css.php"); ?>
<style lang="scss" scoped>
    .img-pdf {
        height: 170px;
        width: 125px;
    }

    .card {
        border-radius: 15px !important;
        box-shadow: 0 0 10px rgba(206, 212, 218, 255) !important;
        padding: 10px 5px !important;
    }

    .btn-success {
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px !important;
    }

    .btn-info {
        background-color: #1867c0 !important;
        font-size: 20px;
        font-weight: bold;
        border-radius: 5px !important;
    }

    .btn-warning {
        background-color: #b22222 !important;
        font-size: 20px;
        font-weight: bold;
        color: white;
        border-radius: 5px !important;
    }

    .size-font {
        font-size: 22px !important;
        color: black;
        font-weight: bold;
    }

    .card-heading {
        text-align: center;
        font-weight: bold;
        padding-bottom: 15px;
        background: #fff
    }

    .card-text {
        background: #fff;
        color: #636262;
    }

    @media(min-width: 1200px) and (max-width: 1800px) {
        .col-xl-2{
            -ms-flex: 0 0 25% !important;
            flex: 0 0 25% !important;
            max-width: 25% !important;
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
                                        <h3 class="font-weight-bold"> มอบหมายงาน ( กองการเงินและบัญชี ) </h3>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="input-group mb-3 pt-3 size-font px-2">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                </div>
                                                <input type="text" id="search" class="form-control size-font" aria-label="Text input with checkbox" onkeyup="inputChange(this)" placeholder="ค้นหารายการ ( ชื่อ / ฝ่าย / ตำแหน่ง )">
                                            </div>
                                        </div>

                                        <div class="row pb-5 mb-2 ">
                                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-2 mb-lg-0 py-2" v-for="item in list">
                                                <!-- Card-->
                                                <div class="card h-100 rounded shadow-sm border-0 ">
                                                    <div class="card-body px-4 pb-3 d-flex flex-column">
                                                        <div class="card-heading">
                                                            <div class=""> ฝ่ายพัฒนาระบบการเงินและบัญชี </div>
                                                        </div>

                                                        <div class="py-2">
                                                            <img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="150" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm mx-auto d-block">
                                                        </div>

                                                        <div class="card-heading pb-0">
                                                             <div>
                                                                คุณ อโณทัย อรุณทอง                    
                                                             </div>
                                                             <div>
                                                                นักวิชาการตอมพิวเตอร์
                                                             </div>
                                                        </div>

                                                        <div class="card-footer bg-transparent mt-auto border-0 p-0 pt-2">
                                                            <button class="btn w-100 pb-0 mb-0" @click="toggle(item)" :class="item.status_accept=='2' ? 'btn-info' :'btn-warning'">
                                                                {{ item.status_accept == 2 ? 'เลือก' : 'ยกเลิก' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>

                                        
                                        <div class="pt-3 row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn w-20 pb-0 mb-0 btn btn-success btn-lg">
                                                        ยืนยันการเลือก
                                                </button>
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
<!-- <body class="nav-md">
    <div class="" id="loaderpage"></div>
    <div class="container body">
        <div class="main_container" id="app">

            <?php //include("../../public/include/menubar.php"); 
            ?>

            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="wellpages" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h3 class="font-weight-bold"> รายการที่แล้วเสร็จ </h3>
                                        <div class="clearfix"></div>
                                    </div>



                                    <div class="container">

                                        <div class="input-group mb-3 pt-3 size-font">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </div>
                                            <input type="text" id="search" class="form-control size-font" aria-label="Text input with checkbox" onkeyup="inputChange(this)">
                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 py-2  d-flex" v-for="item in list">
                                                <div class="card card-block">
                                                    <div class="text-center pt-3">
                                                        <div class="font-weight-bold">{{ item.subject }}</div>
                                                        <div class="font-weight-bold">{{ item.datetime }}</div>
                                                    </div>
                                                    <div class="pt-3">
                                                        <img src=https://fad.rid.go.th/system_dev/ideaseed/production/images/pdf_img.png class="card-img-top rounded mx-auto d-block img-pdf" alt="Card image cap">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-title font-weight-bold mb-1">เรื่อง</div>
                                                        <p class="card-text">{{ item.description }}</p>
                                                    </div>
                                                    <div class="px-3 py-2">
                                                        <button type="button" class="btn w-100" @click="toggle(item)" :class="item.status_accept=='2' ? 'btn-success' :'btn-warning'">
                                                            {{ item.status_accept == 2 ? 'รับทราบและดำเนินการ' : 'กำลังดำเนินการ' }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="container py-4">
                                        

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
</body> -->

</html>
<?php include("../../public/include/include_js.php"); ?>
<?php include("../../public/include/check_cookie.php"); ?>

<script>
    const {
        createApp
    } = Vue
    var data = [{
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        },
        {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่มอบหมายให้ข้าราชการปฏิบัติหน้าที่มอบหมายให้ข้าราชการปฏิบัติหน้าที่มอบหมายให้ข้าราชการปฏิบัติหน้าที่มอบหมายให้ข้าราชการปฏิบัติหน้าที่มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "1",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        },
        {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        },
        {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        }, {
            datetime: "2022-06-01 09:44:27",
            description: "มอบหมายให้ข้าราชการปฏิบัติหน้าที่",
            files_url: "http://saraban.kromchol.com/FLOWDATA/IMGFLW65/1002020010000/00002784.pdf",
            remark: "test",
            reqNo: "2565/DEV-1",
            status_accept: "2",
            subject: "หนังสือเวียน ที่ ข2/6/2565 (264)"
        },
    ]
    createApp({

        data() {
            var content = ''
            console.log('may tets 2')
            return {
                message: 'Hello Vue!',
                list: data
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