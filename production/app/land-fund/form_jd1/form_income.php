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
                                            <h2>บันทึกรายรับ สำหรับแบบ จด.01</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" >
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                    <div class="col-lg-4">
                                                        <label>หัวข้อรายการ</label>
                                                        <input type="text" required="required" id="subjectlist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>เลขที่เอกสาร</label>
                                                        <input type="text" required="required" id="numberlist" class="form-control ">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>วันที่ผ่านรายการ</label>
                                                        <input type="date" required="required" id="datepasslist" class="form-control ">
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
                                            <h2>แจกแจงงบประมาณ สำหรับแบบ จด.01</h2>
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
        tag =   '<div class="col-lg-12" style="margin-bottom:15px;"><button type="button" class="btn btn-info" onclick="addbox_typeone()">เพิ่มการแจกแจง</button></div>'+
                '<div class="col-lg-12" id="frm_box_typeone">'+
                    '<div class="col-lg-12" id="box'+rowbox+'">'+
                        '<div class="col-lg-6">'+
                            '<label>ประเภทเงิน</label>'+
                            '<select class="form-control" id="typemoney" name="typemoney[]">'+
                                '<option value="ค่าตอบแทนพนักงานฯ" >ค่าตอบแทนพนักงานฯ</option>'+
                                '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                                '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                                '<option value="ค่าจ้างชั่วคราวรายเดือน" >ค่าจ้างชั่วคราวรายเดือน</option>'+
                                '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                                '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                                '<option value="ค่าอาหารทำการนอกเวลาราชการ" >ค่าอาหารทำการนอกเวลาราชการ</option>'+
                                '<option value="ค่าเบี้ยประชุม" >ค่าเบี้ยประชุม</option>'+
                                '<option value="ค่าใช้จ่ายในการเดินทางราชการ" >ค่าใช้จ่ายในการเดินทางราชการ</option>'+
                                '<option value="ค่าวัสดุน้ำมันเชื้อเพลิง" >ค่าวัสดุน้ำมันเชื้อเพลิง</option>'+
                                '<option value="ค่าไปรษณีย์" >ค่าไปรษณีย์</option>'+
                                '<option value="ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)" >ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)</option>'+
                                '<option value="คชจ.ฝึกอบรมเกษตรกร" >คชจ.ฝึกอบรมเกษตรกร</option>'+
                                '<option value="ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)" >ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)</option>'+
                                '<option value="ค่าใช้จ่ายอื่นๆ" >ค่าใช้จ่ายอื่นๆ</option>'+
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
        tag =   '<div class="col-lg-12" style="margin-bottom:15px;"><button type="button" class="btn btn-info" onclick="addbox_typetwo()">เพิ่มการแจกแจง</button></div>'+
                '<div class="col-lg-12" id="frm_box_typeone">'+
                    '<div class="col-lg-12" id="box'+rowbox+'">'+
                        '<div class="col-lg-3">'+
                            '<label>ชื่อรายการย่อย</label>'+
                            '<input type="text" class="form-control" id="sub_subject"  name="sub_subject[]">'+
                        '</div>'+
                        '<div class="col-lg-3">'+
                            '<label>ประเภทเงิน</label>'+
                            '<select class="form-control" id="typemoney"  name="typemoney[]">'+
                                '<option value="ค่าตอบแทนพนักงานฯ" >ค่าตอบแทนพนักงานฯ</option>'+
                                '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                                '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                                '<option value="ค่าจ้างชั่วคราวรายเดือน" >ค่าจ้างชั่วคราวรายเดือน</option>'+
                                '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                                '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                                '<option value="ค่าอาหารทำการนอกเวลาราชการ" >ค่าอาหารทำการนอกเวลาราชการ</option>'+
                                '<option value="ค่าเบี้ยประชุม" >ค่าเบี้ยประชุม</option>'+
                                '<option value="ค่าใช้จ่ายในการเดินทางราชการ" >ค่าใช้จ่ายในการเดินทางราชการ</option>'+
                                '<option value="ค่าวัสดุน้ำมันเชื้อเพลิง" >ค่าวัสดุน้ำมันเชื้อเพลิง</option>'+
                                '<option value="ค่าไปรษณีย์" >ค่าไปรษณีย์</option>'+
                                '<option value="ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)" >ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)</option>'+
                                '<option value="คชจ.ฝึกอบรมเกษตรกร" >คชจ.ฝึกอบรมเกษตรกร</option>'+
                                '<option value="ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)" >ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)</option>'+
                                '<option value="ค่าใช้จ่ายอื่นๆ" >ค่าใช้จ่ายอื่นๆ</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="col-lg-4">'+
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
                '<option value="ค่าตอบแทนพนักงานฯ" >ค่าตอบแทนพนักงานฯ</option>'+
                    '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                    '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                    '<option value="ค่าจ้างชั่วคราวรายเดือน" >ค่าจ้างชั่วคราวรายเดือน</option>'+
                    '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                    '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                    '<option value="ค่าอาหารทำการนอกเวลาราชการ" >ค่าอาหารทำการนอกเวลาราชการ</option>'+
                    '<option value="ค่าเบี้ยประชุม" >ค่าเบี้ยประชุม</option>'+
                    '<option value="ค่าใช้จ่ายในการเดินทางราชการ" >ค่าใช้จ่ายในการเดินทางราชการ</option>'+
                    '<option value="ค่าวัสดุน้ำมันเชื้อเพลิง" >ค่าวัสดุน้ำมันเชื้อเพลิง</option>'+
                    '<option value="ค่าไปรษณีย์" >ค่าไปรษณีย์</option>'+
                    '<option value="ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)" >ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)</option>'+
                    '<option value="คชจ.ฝึกอบรมเกษตรกร" >คชจ.ฝึกอบรมเกษตรกร</option>'+
                    '<option value="ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)" >ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)</option>'+
                    '<option value="ค่าใช้จ่ายอื่นๆ" >ค่าใช้จ่ายอื่นๆ</option>'+
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
                '<label>ประเภทเงิน</label>'+
                '<select class="form-control" name="typemoney[]">'+
                    '<option value="ค่าตอบแทนพนักงานฯ" >ค่าตอบแทนพนักงานฯ</option>'+
                    '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                    '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                    '<option value="ค่าจ้างชั่วคราวรายเดือน" >ค่าจ้างชั่วคราวรายเดือน</option>'+
                    '<option value="เงินเพิ่มการครองชีพชั่วคราว" >เงินเพิ่มการครองชีพชั่วคราว</option>'+
                    '<option value="เงินประกันสังคมส่วนของนายจ้าง" >เงินประกันสังคมส่วนของนายจ้าง</option>'+
                    '<option value="ค่าอาหารทำการนอกเวลาราชการ" >ค่าอาหารทำการนอกเวลาราชการ</option>'+
                    '<option value="ค่าเบี้ยประชุม" >ค่าเบี้ยประชุม</option>'+
                    '<option value="ค่าใช้จ่ายในการเดินทางราชการ" >ค่าใช้จ่ายในการเดินทางราชการ</option>'+
                    '<option value="ค่าวัสดุน้ำมันเชื้อเพลิง" >ค่าวัสดุน้ำมันเชื้อเพลิง</option>'+
                    '<option value="ค่าไปรษณีย์" >ค่าไปรษณีย์</option>'+
                    '<option value="ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)" >ค่าจ้างเหมาบริการ (อาหารว่าง ฯ)</option>'+
                    '<option value="คชจ.ฝึกอบรมเกษตรกร" >คชจ.ฝึกอบรมเกษตรกร</option>'+
                    '<option value="ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)" >ค่าจ้างเหมาบริการ (ค่าเช่าเครื่องถ่าย ฯ)</option>'+
                    '<option value="ค่าใช้จ่ายอื่นๆ" >ค่าใช้จ่ายอื่นๆ</option>'+
                '</select>'+
            '</div>'+
            '<div class="col-lg-4">'+
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

