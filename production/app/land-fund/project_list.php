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
                                            <h2>รายการแผนงาน / โครงการ</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <label>ปีงบประมาณ</label>
                                                        <select class="form-control">
                                                            <option>2565</option>
                                                            <option>2564</option>
                                                            <option>2563</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6" style="margin-bottom: 15px;">
                                                        <label>แผนงาน</label>
                                                        <select class="form-control">
                                                            <option>ทั้งหมด</option>
                                                            <option>งานก่อสร้างจัดรูปที่ดิน</option>
                                                            <option>งานปรับปรุงจัดรูปที่ดิน</option>
                                                            <option>งานซ่อมแซมจัดรูปที่ดิน</option>
                                                            <option>งานก่อสร้างงานจัดระบบน้ำเพื่อเกษตรกรรม</option>
                                                            <option>งานปรับปรุงจัดระบบน้ำเพื่อเกษตรกรรม</option>
                                                            <option>งานสำรวจปักหลักเขตพื้นที่โครงการ</option>
                                                            <option>งานสำรวจแปลงกรรมสิทธิ์โดยวิธีภาคพื้นดิน</option>
                                                            <option>งานรังวัดวางแนวเพื่อการก่อสร้างจัดรูปที่ดิน</option>
                                                            <option>งานสำรวจจัดระบบน้ำเพื่อเกษตรกรรม</option>
                                                            <option>งานออกแบบจัดระบบน้ำเพื่อเกษตรกรรม</option>
                                                            <option>งานออกโฉนดที่ดิน</option>
                                                            <option>งบบุคลากร</option>
                                                            <option>งบดำเนินงาน</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12" >
                                                        <button type="button" class="btn btn-secondary">ค้นหา</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <table table id="tableAlert2" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0" width="100%">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" style="width: 5%;">ลำดับ</th>
                                                                <th class="sorting" tabindex="0" style="width: 15%;">แผนงาน</th>
                                                                <th class="sorting" tabindex="0" style="width: 20%;">โครงการ</th>
                                                                <th class="sorting" tabindex="0" style="width: 10%;">วงเงิน (บาท)</th>
                                                                <th class="sorting" tabindex="0" style="width: 10%;">ดำเนินการโดย</th>
                                                                <th class="sorting" tabindex="0" style="width: 15%;">ระยะเวลาการใช้จ่ายเงิน</th>
                                                                <th class="sorting" tabindex="0" style="width: 10%;">แหล่งที่มา</th>
                                                                <th class="sorting" tabindex="0" style="width: 10%;">รายละเอียด</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">1</td>
                                                                <td >งานก่อสร้างจัดรูปที่ดิน</td>
                                                                <td >จัดรูปที่ดินสถานีสูบน้ำด้วยไฟฟ้าบ้านโพนทัน</td>
                                                                <td align="center"><?=number_format(10000000)?></td>
                                                                <td >สจจ.10</td> 
                                                                <td align="center">30/09/2565</td> 
                                                                <td >เงินงบประมาณ</td> 
                                                                <td align="center"><button type="button" class="btn btn-info">ดูรายละเอียด</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">2</td>
                                                                <td >งานก่อสร้างจัดรูปที่ดิน</td>
                                                                <td >จัดรูปที่ดินสถานีสูบน้ำด้วยไฟฟ้าบ้านโนนหนามแท่ง ระยะที่ 2</td>
                                                                <td align="center"><?=number_format(1538000)?></td>
                                                                <td >สจจ.10</td> 
                                                                <td align="center">30/09/2565</td> 
                                                                <td >เงินเหลือจ่าย</td> 
                                                                <td align="center"><button type="button" class="btn btn-info">ดูรายละเอียด</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">3</td>
                                                                <td >งานปรับปรุงจัดรูปที่ดิน</td>
                                                                <td >ปรับปรุงจัดรูปที่ดินโครงการส่งน้ำและบำรุงรักษาพลายชุมพล C1-2&3 (ระยะที่ 4)</td>
                                                                <td align="center"><?=number_format(5200000)?></td>
                                                                <td >สจจ.10</td> 
                                                                <td align="center">30/09/2565</td> 
                                                                <td >เงินงบประมาณ</td> 
                                                                <td align="center"><button type="button" class="btn btn-info">ดูรายละเอียด</button></td> 
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td align="center" class="sorting_1">4</td>
                                                                <td >งานปรับปรุงจัดรูปที่ดิน</td>
                                                                <td >ปรับปรุงจัดรูปที่ดินโครงการส่งน้ำและบำรุงรักษาพลายชุมพล C9-3 (ระยะที่ 2)</td>
                                                                <td align="center"><?=number_format(2500000)?></td>
                                                                <td >สจจ.10</td> 
                                                                <td align="center">30/09/2565</td> 
                                                                <td >เงินงบประมาณ</td> 
                                                                <td align="center"><button type="button" class="btn btn-info">ดูรายละเอียด</button></td> 
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

</script>

