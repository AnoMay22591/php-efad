<?php
    session_start();
    session_unset();
    // $_SESSION["empid"] = NULL;
    // $_SESSION["fullname"] = NULL;
    // $_SESSION["group_permission"] = NULL;
    //header('Location:../Login/');
    //exit();
?>
<?php include("public/include/include_js.php"); ?>
<script>
$(document).ready(function() {
    //$.cookie('emp_id', '', { expires: -1, path: '/'});
    window.location = "../Login/";
});
</script>