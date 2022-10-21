<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); ?>
<?php include("../../public/include/include_css.php"); ?>
<style>
    .tab-pane #tableAlert_income td:first-child { width: 10%; }
    .tab-pane #tableAlert_income td:nth-child(2) { width: 40%; }
    .tab-pane #tableAlert_income td:nth-child(3) { width: 15%; }
    .tab-pane #tableAlert_income td:nth-child(4) { width: 10%; }
    .tab-pane #tableAlert_income td:nth-child(5) { width: 10%; }
    .tab-pane #tableAlert_income td:last-child { width: 15%; }

    .tab-pane #tableAlert_sendback td:first-child { width: 10%; }
    .tab-pane #tableAlert_sendback td:nth-child(2) { width: 40%; }
    .tab-pane #tableAlert_sendback td:nth-child(3) { width: 15%; }
    .tab-pane #tableAlert_sendback td:nth-child(4) { width: 10%; }
    .tab-pane #tableAlert_sendback td:nth-child(5) { width: 10%; }
    .tab-pane #tableAlert_sendback td:last-child { width: 15%; }

    .tab-pane #tableAlert_expenses td:first-child { width: 10%; }
    .tab-pane #tableAlert_expenses td:nth-child(2) { width: 40%; }
    .tab-pane #tableAlert_expenses td:nth-child(3) { width: 15%; }
    .tab-pane #tableAlert_expenses td:nth-child(4) { width: 10%; }
    .tab-pane #tableAlert_expenses td:nth-child(5) { width: 10%; }
    .tab-pane #tableAlert_expenses td:last-child { width: 15%; }

    .tab-pane #tableAlert_revert td:first-child { width: 10%; }
    .tab-pane #tableAlert_revert td:nth-child(2) { width: 40%; }
    .tab-pane #tableAlert_revert td:nth-child(3) { width: 15%; }
    .tab-pane #tableAlert_revert td:nth-child(4) { width: 10%; }
    .tab-pane #tableAlert_revert td:nth-child(5) { width: 10%; }
    .tab-pane #tableAlert_revert td:last-child { width: 15%; }
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
                                                <h2><i class="fa fa-bars"></i> รายการขอเบิก <small>รายการต่างๆในแบบ จด.01</small></h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="balance-tab" data-toggle="tab" href="#balance" role="tab" aria-controls="balance" aria-selected="true">ยอดยกมา</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false">รายรับ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="sendback-tab" data-toggle="tab" href="#sendback" role="tab" aria-controls="sendback" aria-selected="false">เบิกเกินส่งคืน</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="expenses-tab" data-toggle="tab" href="#expenses" role="tab" aria-controls="expenses" aria-selected="false">รายจ่าย</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="revert-tab" data-toggle="tab" href="#revert" role="tab" aria-controls="revert" aria-selected="false">โอนกลับส่วนกลาง</a>
                                                </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent" style="width: 100%;">
                                                    <div class="tab-pane fade active show" id="balance" role="tabpanel" aria-labelledby="balance-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-12">
                                                                    <h3>ยอดยกมา งบบุคลากร</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ค่าตอบแทนพนักงาน</label>
                                                                    <input class="form-control" value="360000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>เงินเพิ่มการครองชีพชั่วคราว</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>เงินประกันสังคมส่วนของนายจ้าง</label>
                                                                    <input class="form-control" value="13500" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าจ้างชั่วคราวรายเดือน</label>
                                                                    <input class="form-control" value="54000" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>เงินเพิ่มการครองชีพชั่วคราว</label>
                                                                    <input class="form-control" value="6000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>เงินประกันสังคมส่วนของนายจ้าง</label>
                                                                    <input class="form-control" value="3000" disabled>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;"><hr />
                                                                <div class="col-lg-12">
                                                                    <h3>ยอดยกมา งบดำเนินงาน</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ค่าอาหารทำการนอกเวลาราชการ</label>
                                                                    <input class="form-control" value="5000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าเบี้ยประชุม</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าใช้จ่ายในการเดินทางราชการ</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าวัสดุน้ำมันเชื้อเพลิง</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ค่าไปรษณีย์</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>คชจ.ฝึกอบรมเกษตรกร</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>ค่าใช้จ่ายอื่นๆ</label>
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
                                                                    <input class="form-control" value="441500" disabled>
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
                                                                            <td >รับโอนเงินจัดสรรจากส่วนกลาง</td>
                                                                            <td align="center">2020-1500002563</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">259000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบรายการ</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="sendback" role="tabpanel" aria-labelledby="sendback-tab">
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
                                                                            <td >ส่งคืนเงินค่าล่วงเวลา เลขที่ ขบ.03 2018-3600000952 วันที่ผ่านรายการ 22.11.2017 1 ราย</td>
                                                                            <td align="center">2020-1600002765</td>
                                                                            <td align="center">30.11.2019</td>
                                                                            <td align="center">1000</td>
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
                                                                            <td >เบิกเงินค่าตอบแทนพนักงานฯ เดือน ต.ค.60 จำนวน 3 ราย</td>
                                                                            <td align="center">2020-3600000222</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">62250</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">2</td>
                                                                            <td >เบิกเงินค่าจ้างชั่วคราวรายเดือน เดือน ต.ค.60 จำนวน 1 ราย</td>
                                                                            <td align="center">2020-3600000216</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">10500</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">3</td>
                                                                            <td >เบิกเงินให้นายจัดรูปที่ดิน</td>
                                                                            <td align="center">2020-360000895</td>
                                                                            <td align="center">18.11.2019</td>
                                                                            <td align="center">1180</td>
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
                                                                            <td >โอนเงินจัดสรรกลับส่วนกลาง ตามหนังสือ สจจ.29/250/2562 สว.15 ต.ค.62</td>
                                                                            <td align="center">2020-1500002621</td>
                                                                            <td align="center">16.10.2019</td>
                                                                            <td align="center">500</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ลบคำขอเบิก</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
    window.location = "../FormIncomeJD1/";
}
</script>

