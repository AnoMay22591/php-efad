<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); ?>
<?php include("../../public/include/include_css.php"); ?>
<style>
    .tab-pane #tableAlert_income td:first-child { width: 10%; }
    .tab-pane #tableAlert_income td:nth-child(2) { width: 10%; }
    .tab-pane #tableAlert_income td:nth-child(3) { width: 40%; }
    .tab-pane #tableAlert_income td:nth-child(4) { width: 15%; }
    .tab-pane #tableAlert_income td:nth-child(5) { width: 10%; }
    .tab-pane #tableAlert_income td:last-child { width: 15%; }
   
</style>
<body class="nav-md">
    <div class="" id="loaderpage"></div>
    <div class="container body">
        <div class="main_container">
            <?php include("../../public/include/menubar.php"); ?>
                <div class="right_col" role="main">
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="row" id="wellpages" style="display: none;">
                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                    <div class="col-md-12 col-sm-12  ">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2><i class="fa fa-bars"></i> รายการขอเบิก <small>รายการต่างๆในแบบ จด.03</small></h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="balance-tab" data-toggle="tab" href="#balance" role="tab" aria-controls="balance" aria-selected="true">ยอดยกมา</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false">รายการ</a>
                                                </li>
                                                <!--<li class="nav-item">
                                                    <a class="nav-link" id="sendback-tab" data-toggle="tab" href="#sendback" role="tab" aria-controls="sendback" aria-selected="false">เบิกเกินส่งคืน</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="expenses-tab" data-toggle="tab" href="#expenses" role="tab" aria-controls="expenses" aria-selected="false">รายจ่าย</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="revert-tab" data-toggle="tab" href="#revert" role="tab" aria-controls="revert" aria-selected="false">โอนกลับส่วนกลาง</a>
                                                </li>-->
                                                </ul>
                                                <div class="tab-content" id="myTabContent" style="width: 100%;">
                                                    <div class="tab-pane fade active show" id="balance" role="tabpanel" aria-labelledby="balance-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-12">
                                                                    <h3>ยอดยกมา</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>จำนวนเงิน</label>
                                                                    <input class="form-control" value="5000" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;"><hr />
                                                                <div class="col-lg-12">
                                                                    <h3>ยอดยกมา การรับและนำส่งรายได้</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ค่าเช่า</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าขายแบบ</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าปรับ</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าทดสอบ ค่าวิเคราะห์วัสดุ</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>รายได้อื่นๆ</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;"><hr />
                                                                <div class="col-lg-12">
                                                                    <h3>ยอดยกมา รวมทั้งสิ้น</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ยอดรวม</label>
                                                                    <input class="form-control" value="5000" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="income" role="tabpanel" aria-labelledby="income-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> สร้างรายการ</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_income" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">ลำดับ</th>
                                                                            <th class="sorting" style="width: 10%;">วัน เดือน ปี</th>
                                                                            <th class="sorting" style="width: 50%;">หัวข้อรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">เลขที่เอกสาร</th>
                                                                            <th class="sorting" style="width: 10%;">ยอดรวมทั้งสิ้น</th>
                                                                            <th class="sorting" style="width: 15%;">จัดการ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td >รับเงินโอนขายบิลจากกองทุน</td>
                                                                            <td align="center">2020-1500001111</td>
                                                                            <td align="center">2664800</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบรายการ</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="tab-pane fade" id="sendback" role="tabpanel" aria-labelledby="sendback-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> เพิ่มคำขอ</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_sendback" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">ลำดับ</th>
                                                                            <th class="sorting" style="width: 50%;">หัวข้อรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">เลขที่เอกสาร</th>
                                                                            <th class="sorting" style="width: 10%;">วันที่ผ่านรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">ยอดรวมทั้งสิ้น</th>
                                                                            <th class="sorting" style="width: 15%;">จัดการ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >ส่งคืนเงินค่าจ้างลูกจ้างชั่วคราว จำนวน 1 ราย ขบ.03 2020-3600000653 วันที่ 8.11.2019</td>
                                                                            <td align="center">2020-1600003333</td>
                                                                            <td align="center">30.11.2019</td>
                                                                            <td align="center">475</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> เพิ่มคำขอ</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_expenses" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">ลำดับ</th>
                                                                            <th class="sorting" style="width: 50%;">หัวข้อรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">เลขที่เอกสาร</th>
                                                                            <th class="sorting" style="width: 10%;">วันที่ผ่านรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">ยอดรวมทั้งสิ้น</th>
                                                                            <th class="sorting" style="width: 15%;">จัดการ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >เบิกเงินค่าจ้างลูกจ้างชั่วคราวรายวัน ประจำเดือน ต.ค.60 จำนวน 10 ราย</td>
                                                                            <td align="center">2020-3600000653</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">120750</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">2</td>
                                                                            <td >เบิกเงินให้นายมานะ ทำดี</td>
                                                                            <td align="center">2020-3600000766</td>
                                                                            <td align="center">13.11.2019</td>
                                                                            <td align="center">1650</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">3</td>
                                                                            <td >เบิกเงินค่าวัสดุก่อสร้าง หจก.วัสดุภัณฑ์</td>
                                                                            <td align="center">2020-3400004501</td>
                                                                            <td align="center">26.11.2019</td>
                                                                            <td align="center">25000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">4</td>
                                                                            <td >เบิกเงินค่าน้ำมันเชื้อเพลิง หจก.ปิโตเลี่ยม</td>
                                                                            <td align="center">2020-3400003568</td>
                                                                            <td align="center">27.11.2019</td>
                                                                            <td align="center">30000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">5</td>
                                                                            <td >เบิกเงินค่าล่วงเวลาลูกจ้างรายวัน ประจำเดือน 1-31 ต.ค.62</td>
                                                                            <td align="center">2020-3400004501</td>
                                                                            <td align="center">29.11.2019</td>
                                                                            <td align="center">20000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="revert" role="tabpanel" aria-labelledby="revert-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> เพิ่มคำขอ</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_revert" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">ลำดับ</th>
                                                                            <th class="sorting" style="width: 50%;">หัวข้อรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">เลขที่เอกสาร</th>
                                                                            <th class="sorting" style="width: 10%;">วันที่ผ่านรายการ</th>
                                                                            <th class="sorting" style="width: 10%;">ยอดรวมทั้งสิ้น</th>
                                                                            <th class="sorting" style="width: 15%;">จัดการ</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >โอนเงินกลับส่วนกลางเนื่องจากปรับลดวงเงินงบประมาณ</td>
                                                                            <td align="center">2020-1500000265</td>
                                                                            <td align="center">30.11.2019</td>
                                                                            <td align="center">52000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>-->
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
        $('#tableAlert_income').DataTable( {
            destroy: true,
            searching: true,
            responsive: true,
        });
        $('#tableAlert_sendback').DataTable( {
            destroy: true,
            searching: true,
            responsive: true,
        });
        $('#tableAlert_expenses').DataTable( {
            destroy: true,
            searching: true,
            responsive: true,
        });
        $('#tableAlert_revert').DataTable( {
            destroy: true,
            searching: true,
            responsive: true,
        });
    }, 1000);
 
});
function add(){
    window.location = "../FormIncomeJD3/";
}
</script>

