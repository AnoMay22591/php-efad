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
                                                <h2><i class="fa fa-bars"></i> ???????????????????????????????????? <small>???????????????????????????????????????????????? ??????.01</small></h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="balance-tab" data-toggle="tab" href="#balance" role="tab" aria-controls="balance" aria-selected="true">?????????????????????</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false">??????????????????</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="sendback-tab" data-toggle="tab" href="#sendback" role="tab" aria-controls="sendback" aria-selected="false">??????????????????????????????????????????</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="expenses-tab" data-toggle="tab" href="#expenses" role="tab" aria-controls="expenses" aria-selected="false">?????????????????????</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="revert-tab" data-toggle="tab" href="#revert" role="tab" aria-controls="revert" aria-selected="false">?????????????????????????????????????????????</a>
                                                </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent" style="width: 100%;">
                                                    <div class="tab-pane fade active show" id="balance" role="tabpanel" aria-labelledby="balance-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-12">
                                                                    <h3>????????????????????? ???????????????????????????</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="360000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>?????????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>???????????????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="13500" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>?????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="54000" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>?????????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="6000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>???????????????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="3000" disabled>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;"><hr />
                                                                <div class="col-lg-12">
                                                                    <h3>????????????????????? ?????????????????????????????????</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>??????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="5000" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>??????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>????????????????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>????????????????????????????????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>?????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>??????????????????????????????????????????????????? (??????????????????????????? ???)</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>?????????.??????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label>??????????????????????????????????????????????????? (?????????????????????????????????????????????????????? ???)</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>?????????????????????????????????????????????</label>
                                                                    <input class="form-control" value="0" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;"><hr />
                                                                <div class="col-lg-12">
                                                                    <h3>????????????????????? ?????????????????????????????????</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-bottom: 15px;">
                                                                <div class="col-lg-3">
                                                                    <label>??????????????????</label>
                                                                    <input class="form-control" value="441500" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="income" role="tabpanel" aria-labelledby="income-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> ?????????????????????????????????</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_income" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">???????????????</th>
                                                                            <th class="sorting" style="width: 50%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">??????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 15%;">??????????????????</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >?????????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td align="center">2020-1500002563</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">259000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ????????????????????????</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="sendback" role="tabpanel" aria-labelledby="sendback-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> ???????????????????????????</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_sendback" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">???????????????</th>
                                                                            <th class="sorting" style="width: 50%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">??????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 15%;">??????????????????</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >??????????????????????????????????????????????????????????????? ?????????????????? ??????.03 2018-3600000952 ???????????????????????????????????????????????? 22.11.2017 1 ?????????</td>
                                                                            <td align="center">2020-1600002765</td>
                                                                            <td align="center">30.11.2019</td>
                                                                            <td align="center">1000</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ??????????????????????????????</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> ???????????????????????????</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_expenses" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">???????????????</th>
                                                                            <th class="sorting" style="width: 50%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">??????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 15%;">??????????????????</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >??????????????????????????????????????????????????????????????????????????? ??????????????? ???.???.60 ??????????????? 3 ?????????</td>
                                                                            <td align="center">2020-3600000222</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">62250</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ??????????????????????????????</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">2</td>
                                                                            <td >????????????????????????????????????????????????????????????????????????????????????????????? ??????????????? ???.???.60 ??????????????? 1 ?????????</td>
                                                                            <td align="center">2020-3600000216</td>
                                                                            <td align="center">2.11.2019</td>
                                                                            <td align="center">10500</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ??????????????????????????????</button></td> 
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">3</td>
                                                                            <td >??????????????????????????????????????????????????????????????????????????????</td>
                                                                            <td align="center">2020-360000895</td>
                                                                            <td align="center">18.11.2019</td>
                                                                            <td align="center">1180</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ??????????????????????????????</button></td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="revert" role="tabpanel" aria-labelledby="revert-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12  " style="margin: 10px; ">
                                                                <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> ???????????????????????????</button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <table id="tableAlert_revert" width="100%" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0"  border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="sorting_asc" style="width: 5% ; ">???????????????</th>
                                                                            <th class="sorting" style="width: 50%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">????????????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 10%;">??????????????????????????????????????????</th>
                                                                            <th class="sorting" style="width: 15%;">??????????????????</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" class="sorting_1">1</td>
                                                                            <td >??????????????????????????????????????????????????????????????????????????? ?????????????????????????????? ?????????.29/250/2562 ??????.15 ???.???.62</td>
                                                                            <td align="center">2020-1500002621</td>
                                                                            <td align="center">16.10.2019</td>
                                                                            <td align="center">500</td>
                                                                            <td align="center"><button type="button" class="btn btn-danger" onclick="selectjd()"><i class="fa fa-trash"></i> ??????????????????????????????</button></td> 
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

