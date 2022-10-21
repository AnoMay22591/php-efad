<?php
    session_start();
    $_SESSION["empid"] = $_POST["empid"];
    $_SESSION["fullname"] = $_POST["fullname"];
    $_SESSION["group_permission"] = $_POST["grp"];
    

    include("connectDB.php");
    $emp = $_SESSION["empid"];
    $sql = "select * from permission_admin where status = '1' AND emp_id = '$emp' AND segment_permission != ''";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0){
        $_SESSION["admin_permission"] = "true";
    }

    echo 'true';
?>