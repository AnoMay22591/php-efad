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
                                            <h2>รายละเอียดโครงการ</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <table style="width: 100%;">
                                                            <tr>
                                                                <th style="width:30%;">ชื่อแผนงาน</th>
                                                                <td style="width:70%;">งานก่อสร้างจัดรูปที่ดิน</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ชื่อโครงการ</th>
                                                                <td>จัดรูปที่ดินสถานีสูบน้ำด้วยไฟฟ้าบ้านโพนทัน</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ชื่อหน่วยงาน</th>
                                                                <td>สำนักงานจัดรูปที่ดินและจัดระบบน้ำเพื่อเกษตรกรรมที่ 10 หนองคาย</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ที่ตั้ง</th>
                                                                <td>ตำบลนาหนัง, ชุมช้าง อำเภอโพนพิสัย จังหวัดหนองคาย</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ดำเนินการโดย</th>
                                                                <td>สจจ.10 หนองคาย</td>
                                                            </tr>
                                                            <tr>
                                                                <th>รหัสศูนย์ต้นทุน</th>
                                                                <td>0700300154</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ชื่อหน่วยเบิกจ่าย</th>
                                                                <td>โครงการชลประทานหนองคาย</td>
                                                            </tr>
                                                            <tr>
                                                                <th>รหัสหน่วยเบิกจ่าย</th>
                                                                <td>0700300059</td>
                                                            </tr>
                                                            <tr>
                                                                <th>แหล่งที่มา</th>
                                                                <td>เงินงบประมาณ</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <table style="width: 100%;">
                                                           
                                                            <tr>
                                                                <th style="width:30%;">วงเงิน (บาท)</th>
                                                                <td style="width:70%;">10,000,000</td>
                                                            </tr>
                                                            <tr>
                                                                <th>ระยะเวลาการใช้จ่ายเงิน</th>
                                                                <td>30/09/2565</td>
                                                            </tr>
                                                           
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>คำขอเบิกประจำเดือน</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <button type="button" class="btn btn-primary" onclick="on_modal()"><i class="fa fa-plus"></i> สร้างคำขอประจำเดือน</button>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <table table id="tableAlert2" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0" width="100%">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" style="width: 15%;">ลำดับ</th>
                                                                <th class="sorting" tabindex="0" style="width: 20%;">คำขอประจำเดือน</th>
                                                                <th class="sorting" tabindex="0" style="width: 12%;">สถานะ จด.01</th>
                                                                <th class="sorting" tabindex="0" style="width: 12%;">สถานะ จด.02</th>
                                                                <th class="sorting" tabindex="0" style="width: 12%;">สถานะ จด.03</th>
                                                                <th class="sorting" tabindex="0" style="width: 20%;">จัดการ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">1</td>
                                                                <td align="center">เมษายน 2565</td>
                                                                <td align="center" style="color:red;">ยังไม่แจกแจงงบ</td>
                                                                <td align="center" style="color:red;">ยังไม่แจกแจงงบ</td>
                                                                <td align="center" style="color:red;">ยังไม่แจกแจงงบ</td>
                                                                <td align="center"><button type="button" class="btn btn-primary" onclick="selectjd()"> จัดการงบประมาณ</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">2</td>
                                                                <td align="center">มีนาคม 2565</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center"><button type="button" class="btn btn-primary" onclick="selectjd()"> จัดการงบประมาณ</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">3</td>
                                                                <td align="center">กุมภาพันธ์ 2565</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center"><button type="button" class="btn btn-primary" onclick="selectjd()"> จัดการงบประมาณ</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">4</td>
                                                                <td align="center">มกราคม 2565</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center"><button type="button" class="btn btn-primary" onclick="selectjd()"> จัดการงบประมาณ</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">5</td>
                                                                <td align="center">ธันวาคม 2564</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center" style="color:green;">แจกแจงงบแล้ว</td>
                                                                <td align="center"><button type="button" class="btn btn-primary" onclick="selectjd()"> จัดการงบประมาณ</button></td> 
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include("modal_landfund/create_request_modal.php"); ?>
                            <?php include("modal_landfund/selected_jd.php"); ?>
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
function on_modal(){
    $("#create_req").modal();
}
function selectjd(){
    $("#jdmodal").modal();
}
function goto(v){
    if(v == '1'){
        window.location = "../InsertJD1/";
    }else if(v == '2'){
        window.location = "../InsertJD2/";
    }else if(v == '3'){
        window.location = "../InsertJD3/";
    }
   
}
</script>

