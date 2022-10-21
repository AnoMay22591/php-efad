<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("public/include/include_css.php"); ?>
<style>
/* body, html {
  height: 100%;
  margin: 0;
  position: relative;
  background-color: #0000003b;
  height: 100%;
} */

.bg {
  /* The image used */
  background-image: url("../production/public/images/a_9.jpg");

  /* Full height */
  height: 100vh; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /*display: none;*/
}
.frmlogin{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -250px;
    margin-left: -250px;
    width: 500px;
    height: 500px;
    background-color: white;
    border-radius: 8%;
    display: none;
    
}
.bgcolor{
    position: absolute;
    background-color: #0000009e;
    opacity: 0.5;
    width: 100%;
    height: 100%;
}
.banner_text{
    position: absolute;
    color: white;
    top: 3%;
    background-color: #26b99a6b;
    width: 100%;
}
.main_container{
    margin: 50px;
}
#logo_img{
    margin-left: 120px;
    width: 140px;
}
@media only screen and (min-width: 210px) {
    .frmlogin{
        top: 50%;
        left: 63%;
        margin-top: -200px;
        margin-left: -135px;
        width: 200px;
        height: 400px;
        border-radius: 2%;
        
    }
    .main_container{
        margin-left: 10px;
        margin-right: 10px;
    }
    #logo_img{
        margin-left: 40px;
        width: 80px;
        margin-top: -20px;
    }
    .banner_text{
        position: absolute;
        color: white;
        top: 3%;
        background-color: #26b99a6b;
        width: 100%;
        font-size: 10px;
    }
    #tag_p{
        margin-top: 17px;
    }
}
@media only screen and (min-width: 375px) {
    .frmlogin{
        top: 50%;
        left: 63%;
        margin-top: -200px;
        margin-left: -170px;
        width: 250px;
        height: 400px;
        border-radius: 3%;
        
    }
    .main_container{
        margin-left: 10px;
        margin-right: 10px;
    }
    #logo_img{
        margin-left: 65px;
        width: 80px;
        margin-top: -20px;
    }
    .banner_text{
        position: absolute;
        color: white;
        top: 3%;
        background-color: #26b99a6b;
        width: 100%;
        font-size: 12px;
    }
    #tag_p{
        margin-top: 17px;
    }
}
@media only screen and (min-width: 390px) {
    .frmlogin{
        top: 50%;
        left: 62.5%;
        margin-top: -175px;
        margin-left: -175px;
        width: 250px;
        height: 400px;
        border-radius: 3%;
        
    }
    .main_container{
        margin-left: 10px;
        margin-right: 10px;
    }
    #logo_img{
        margin-left: 65px;
        width: 80px;
        margin-top: -20px;
    }
    .banner_text{
        position: absolute;
        color: white;
        top: 3%;
        background-color: #26b99a6b;
        width: 100%;
        font-size: 18px;
    }
    #tag_p{
        margin-top: 15px;
    }
}
@media only screen and (min-width: 615px) {
    .frmlogin{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -250px;
        margin-left: -250px;
        width: 500px;
        height: 500px;
        background-color: white;
        border-radius: 8%;
        display: none;
        
    }
    .bgcolor{
        position: absolute;
        background-color: #0000009e;
        opacity: 0.5;
        width: 100%;
        height: 100%;
    }
    .main_container{
        margin: 50px;
    }
    #logo_img{
        margin-left: 120px;
        width: 140px;
    }
    .banner_text{
        position: absolute;
        color: white;
        top: 3%;
        background-color: #26b99a6b;
        width: 100%;
        font-size: 30px;
    }
    
    
}
</style>
</head>
<body>
<div class="" id="loaderpage"></div>
<div class="bg">
    <div class="bgcolor">
        
    </div>
    <div class="banner_text">
        <p style="margin-left: 50px;" id="tag_p">กองทุนจัดรูปที่ดิน NBIS (Non Budget Information System)</p>
    </div>
    <div class="frmlogin">
        <div class="main_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <img src="../production/public/images/logo.png"  id="logo_img">
                        <p></p>
                        <span class="form-control-feedback center" aria-hidden="true"></span>
                    </div>
                    <div class="col-lg-12  form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="user" placeholder="Username">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-lg-12  form-group has-feedback">
                        <input type="password" class="form-control has-feedback-left" id="pass" placeholder="Password">
                        <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-round btn-success" onclick="login()" style="float:left"><i class="fa fa-lock"></i> เข้าสู่ระบบ</button>
                        <button type="button" class="btn btn-round btn-warning" style="float:left"><i class="fa fa-key"></i> ลืมรหัสผ่าน</button>
                    </div>
                    <div class="col-lg-12" style="margin-top: 15px;">
                        <p>พัฒนาโดย ส่วนพัฒนาระบบงานคลัง กองการเงินและบัญชี กรมชลประทาน</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php include("public/include/include_js.php"); ?>
<script>
$(document).ready(function() {
    $( "#loaderpage" ).addClass( "loading" );
    setTimeout(function(){ 
        ajax_stop();
        $(".bg").fadeIn( "slow" );
        $(".frmlogin").slideDown("slow");
        document.addEventListener("keydown", function(event) {
            if(event.keyCode == '13'){
                login();
            }
        })
    }, 500);
    
});
function login(){
    if($("#user").val() == "user" && $("#pass").val() == "1234"){
        window.location = "../Index/";
    }else if($("#user").val() == "adminplan" && $("#pass").val() == "1234"){
        window.location = "../IndexADPlan/";
    }else if($("#user").val() == "adminbg" && $("#pass").val() == "1234"){
        window.location = "../IndexADBG/";
    }
    
}
</script>