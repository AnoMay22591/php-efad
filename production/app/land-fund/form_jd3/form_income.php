<!DOCTYPE html>
<html lang="en">
<?php //include("include/checksession.php"); ?>
<?php include("../../../public/include/include_css.php"); ?>

<body class="nav-md">
    <div class="" id="loaderpage"></div>
    <div class="container body">
        <div class="main_container">
            <?php include("../../../public/include/menubar.php"); ?>
                <div class="right_col" role="main">
                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="row" id="wellpages" style="display: none;">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>บันทึกรายรับ สำหรับแบบ จด.03</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-lg-4">
                                                        <label>วัน เดือน ปี</label>
                                                        <input type="date" required="required" id="datepasslist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>หัวข้อรายการ</label>
                                                        <input type="text" required="required" id="subjectlist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>ใบเสร็จรับเงิน เล่มที่/เลขที่</label>
                                                        <input type="text" required="required" id="invoice_fix" class="form-control ">
                                                    </div>
                                                     
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-lg-4">
                                                        <label>เลขที่เอกสาร RB วันที่ผ่านราย</label>
                                                        <input type="text" required="required" id="datepasslist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>วันเดือนปี ที่นำฝาก</label>
                                                        <input type="text" required="required" id="subjectlist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>เลขที่เอกสาร R2 วันที่ผ่านรายการ</label>
                                                        <input type="text" required="required" id="numberlist" class="form-control ">
                                                    </div>
                                                     
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-lg-4">
                                                        <label>เลขที่เอกสาร RX วันที่ผ่านรายการ</label>
                                                        <input type="text" required="required" id="datepasslist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>เลขที่เอกสาร RO วันที่ผ่านรายการ</label>
                                                        <input type="text" required="required" id="subjectlist" class="form-control ">
                                                    </div>
                                                  
                                                     
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-lg-4">
                                                        <label>รูปแบบการแจกแจง</label>
                                                        <select class="form-control" id="typelist" onchange="frmsub()">
                                                            <option value="0">--- เลือกรูปแบบการแจกแจง ---</option>
                                                            <option value="1">ไม่มีรายการย่อย</option>
                                                            <option value="2">มีรายการย่อย</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>แจกแจงงบประมาณ สำหรับแบบ จด.03</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;" id="frm_sub">
                                                   
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                        <button type="button" class="btn btn-dark"><i class="fa fa-reply"></i> ย้อนกลับ</button>
                                                        <button type="button" class="btn btn-success" onclick="savedata()"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
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
            <?php include("../../../public/include/footer.php"); ?>
        </div>
    </div>
</body>
</html>
<?php include("../../../public/include/include_js.php"); ?>
<?php include("../../../public/include/check_cookie.php"); ?>

<script>
var rowbox = 0;
$(document).ready(function() {
    $( "#loaderpage" ).addClass( "loading" );
    setTimeout(function(){ 
        $("#wellpages").fadeIn( "slow" );
        ajax_stop();
        $('#tableAlert').DataTable( {
            destroy: true,
            searching: true,
            responsive: true,
        });
    }, 1000);
 
});
function frmsub(){
    type = $("#typelist").val();
    if(type == '0'){
        $("#frm_sub").html("");
    }else if(type == '1'){
        $( "#invoice_fix" ).prop( "disabled", false );
        tag =   '<div class="col-lg-12" style="margin-bottom:15px;"><button type="button" class="btn btn-info" onclick="addbox_typeone()">เพิ่มการแจกแจง</button></div>'+
                '<div class="col-lg-12" id="frm_box_typeone">'+
                    '<div class="col-lg-12" id="box'+rowbox+'">'+
                        '<div class="col-lg-6">'+
                            '<label>ประเภทเงิน</label>'+
                            '<select class="form-control" id="typemoney" name="typemoney[]">'+
                                '<option value="ค่าเช่า" >ค่าเช่า</option>'+
                                '<option value="ค่าขายแบบ" >ค่าขายแบบ</option>'+
                                '<option value="ค่าปรับ" >ค่าปรับ</option>'+
                                '<option value="ค่าทดสอบ ค่าวิเคราะห์วัสดุ" >ค่าทดสอบ ค่าวิเคราะห์วัสดุ</option>'+
                                '<option value="รายได้อื่นๆ" >รายได้อื่นๆ</option>'+
                                
                            '</select>'+
                        '</div>'+
                        '<div class="col-lg-4">'+
                            '<label>จำนวนเงิน</label>'+
                            '<div class="input-group">'+
                                '<input type="text" class="form-control" id="money"  name="money[]">'+
                                '<span class="input-group-btn">'+
                                    '<button type="button" class="btn btn-danger" onclick="delbox_typeone('+rowbox+')">ลบ</button>'+
                                '</span>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
        
        $("#frm_sub").html(tag);
    }else if(type == '2'){
        $( "#invoice_fix" ).prop( "disabled", true );
        tag =   '<div class="col-lg-12" style="margin-bottom:15px;"><button type="button" class="btn btn-info" onclick="addbox_typetwo()">เพิ่มการแจกแจง</button></div>'+
                '<div class="col-lg-12" id="frm_box_typeone">'+
                    '<div class="col-lg-12" id="box'+rowbox+'">'+
                        '<div class="col-lg-3">'+
                            '<label>ชื่อรายการย่อย</label>'+
                            '<input type="text" class="form-control" id="sub_subject"  name="sub_subject[]">'+
                        '</div>'+
                        '<div class="col-lg-3">'+
                            '<label>ใบเสร็จรับเงินเล่มที่ / เลขที่</label>'+
                            '<input type="text" class="form-control" id="invoice"  name="invoice[]">'+
                        '</div>'+
                        '<div class="col-lg-3">'+
                            '<label>ประเภทเงิน</label>'+
                            '<select class="form-control" id="typemoney"  name="typemoney[]">'+
                                '<option value="ค่าเช่า" >ค่าเช่า</option>'+
                                '<option value="ค่าขายแบบ" >ค่าขายแบบ</option>'+
                                '<option value="ค่าปรับ" >ค่าปรับ</option>'+
                                '<option value="ค่าทดสอบ ค่าวิเคราะห์วัสดุ" >ค่าทดสอบ ค่าวิเคราะห์วัสดุ</option>'+
                                '<option value="รายได้อื่นๆ" >รายได้อื่นๆ</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="col-lg-3">'+
                            '<label>จำนวนเงิน</label>'+
                            '<div class="input-group">'+
                                '<input type="text" class="form-control" id="money"  name="money[]">'+
                                '<span class="input-group-btn">'+
                                    '<button type="button" class="btn btn-danger" onclick="delbox_typetwo('+rowbox+')">ลบ</button>'+
                                '</span>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
        
        $("#frm_sub").html(tag);
    }
}
function addbox_typeone(){
    rowbox = parseInt(rowbox)+parseInt(1);
    tag ='<div class="col-lg-12" id="box'+rowbox+'">'+
            '<div class="col-lg-6">'+
                '<label>ประเภทเงิน</label>'+
                '<select class="form-control" id="typemoney" name="typemoney[]">'+
                    '<option value="ค่าเช่า" >ค่าเช่า</option>'+
                    '<option value="ค่าขายแบบ" >ค่าขายแบบ</option>'+
                    '<option value="ค่าปรับ" >ค่าปรับ</option>'+
                    '<option value="ค่าทดสอบ ค่าวิเคราะห์วัสดุ" >ค่าทดสอบ ค่าวิเคราะห์วัสดุ</option>'+
                    '<option value="รายได้อื่นๆ" >รายได้อื่นๆ</option>'+
                '</select>'+
            '</div>'+
            '<div class="col-lg-4">'+
                '<label>จำนวนเงิน</label>'+
                '<div class="input-group">'+
                    '<input type="text" class="form-control" id="money"  name="money[]">'+
                    '<span class="input-group-btn">'+
                        '<button type="button" class="btn btn-danger" onclick="delbox_typeone('+rowbox+')">ลบ</button>'+
                    '</span>'+
                '</div>'+
            '</div>'+
        '</div>';
    $("#frm_box_typeone").append(tag);      
}
function addbox_typetwo(){
    rowbox = parseInt(rowbox)+parseInt(1);
    tag ='<div class="col-lg-12" id="box'+rowbox+'">'+
            '<div class="col-lg-3">'+
                '<label>ชื่อรายการย่อย</label>'+
                '<input type="text" class="form-control" id="sub_subject"  name="sub_subject[]">'+
            '</div>'+
            '<div class="col-lg-3">'+
                '<label>ใบเสร็จรับเงินเล่มที่ / เลขที่</label>'+
                '<input type="text" class="form-control" id="invoice"  name="invoice[]">'+
            '</div>'+
            '<div class="col-lg-3">'+
                '<label>ประเภทเงิน</label>'+
                '<select class="form-control" name="typemoney[]">'+
                    '<option value="ค่าเช่า" >ค่าเช่า</option>'+
                    '<option value="ค่าขายแบบ" >ค่าขายแบบ</option>'+
                    '<option value="ค่าปรับ" >ค่าปรับ</option>'+
                    '<option value="ค่าทดสอบ ค่าวิเคราะห์วัสดุ" >ค่าทดสอบ ค่าวิเคราะห์วัสดุ</option>'+
                    '<option value="รายได้อื่นๆ" >รายได้อื่นๆ</option>'+
                '</select>'+
            '</div>'+
            '<div class="col-lg-3">'+
                '<label>จำนวนเงิน</label>'+
                '<div class="input-group">'+
                    '<input type="text" class="form-control" id="money"  name="money[]">'+
                    '<span class="input-group-btn">'+
                        '<button type="button" class="btn btn-danger" onclick="delbox_typetwo('+rowbox+')">ลบ</button>'+
                    '</span>'+
                '</div>'+
            '</div>'+
        '</div>';
    $("#frm_box_typeone").append(tag);      
}
function delbox_typeone(v){
    $("#box"+v).remove();
}
function delbox_typetwo(v){
    $("#box"+v).remove();
}

function savedata(){
    values = [];
    subjectlist = $("#subjectlist").val();
    numberlist = $("#numberlist").val();
    datepasslist = $("#datepasslist").val();
    typelist = $("#typelist").val();
    
    if(typelist == '0'){
        alert('กรุณาเลือกรูปแบบการแจกแจง');
    }else if(typelist == '1'){
        var values1 = []; 
        var values2 = $("select[name='typemoney[]']").map(function(){return $(this).val();}).get();
        var values3 = $("input[name='money[]']").map(function(){return $(this).val();}).get();
        
    }else if(typelist == '2'){
        var values1 = $("input[name='sub_subject[]']").map(function(){return $(this).val();}).get();
        var values2 = $("select[name='typemoney[]']").map(function(){return $(this).val();}).get();
        var values3 = $("input[name='money[]']").map(function(){return $(this).val();}).get();
    }
    console.log(values1);
    console.log(values2);
    console.log(values3);
}
</script>

