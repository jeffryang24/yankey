<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Installer Page For Yankee-Whiskey">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= base_url().'resources/css/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="<?= base_url().'resources/css/installer.css' ?>">
        <script src="<?= base_url().'resources/js/jquery.min.js' ?>"></script>
        <script src="<?= base_url().'resources/js/angular-animate.min.js' ?>"></script>
        <script src="<?= base_url().'resources/js/jquery.mask.min.js' ?>"></script>
        <!-- Internal Script -->
        <script src="<?= base_url().'resources/js/installer.js' ?>"></script>
        <title><?= $installer_page_title ?></title>
    </head>
    <body ng-app="instapp" ng-controller="instactrl">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" id="header">
                    <h3 class="h3_title"><a href="<?= base_url() ?>" target="_self">Title</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 content">
                    <legend class="legend_s">Setup Progress</legend>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{progress}}%;">
                            <b>{{progress}}%</b>
                        </div>
                    </div>
                </div>
            </div>
            <!-- begin page 1 -->
            <div id="page-1" ng-show="page1">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 content" id="content-1">
                        <legend class="legend_s">Personal User Configuration</legend>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtFirstName" class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtFirstName" name="txtFirstName" class="form-control txtField" ng-model="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtLastName" class="col-sm-3 control-label">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtLastName" name="txtLastName" class="form-control txtField" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtUsername" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtUsername" name="txtUsername" class="form-control txtField" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtEmail" name="txtEmail" class="form-control txtField" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-5">
                                    <button class="btn btn-success btn-sm btnPrevNext" id="btnNext-1" name="btnNext-1" ng-click="page1=0;page2=1;">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of page 1 -->
            
            <!-- begin page 2 -->
            <div id="page-2" ng-show="page2">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 content" id="content-2">
                        <legend>Password and PIN</legend>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtPass1" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="txtPass1" name="txtPass1" class="form-control txtField" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPass2" class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="txtPass2" name="txtPass2" class="form-control txtField" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pin" class="col-sm-3 control-label">6 Digit PIN</label>
                                <div class="col-sm-4">
                                    <input type="password" id="txtPIN1" name="txtPIN1" class="form-control txtField" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-default toggle" id="btnShowToggle" name="btnShowToggle" type="button" data-toggle="0">Show PIN</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <button class="btn btn-danger btn-sm btnPrevNext" id="btnBack-1" name="btnBack-1" ng-click="page2=0;page1=1;">Previous</button>
                                    <button class="btn btn-success btn-sm btnPrevNext" id="btnNext-2" name="btnNext-2" ng-click="page2=0;page3=1;">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page 2 -->
            
            <!-- begin page 3 -->
            <div id="page-3" ng-show="page3">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 content" id="content-3">
                        <legend>Database Configuration</legend>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtDbUser" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtDbUser" name="txtDbUser" class="form-control txtField" placeholder="Database Username">
                                    <span id="DbUserHelpBlock" class="help-block">Default username: <i>root</i>.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDbPass" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="txtPass2" name="txtPass2" class="form-control txtField" placeholder="&bullet;&bullet;&bullet;&bullet;&bullet;&bullet;">
                                    <span id="DbPassHelpBlock" class="help-block">Default password is blank.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDbUser" class="col-sm-3 control-label">Database Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtDbName" name="txtDbName" class="form-control txtField" placeholder="Database Name">
                                    <span id="DbNameHelpBlock" class="help-block">If there is no database created in your server, we will create it for you.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDbDriver" class="col-sm-3 control-label">Database Driver</label>
                                <div class="col-sm-4">
                                    <div class="well well-sm DBDriverText">MySQLi</div>
                                    <span id="DbServerHelpBlock" class="help-block">Currently only supports MySQL Improved.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <button class="btn btn-danger btn-sm btnPrevNext" id="btnBack-2" name="btnBack-2" ng-click="page3=0;page2=1;">Previous</button>
                                    <button class="btn btn-success btn-sm btnPrevNext" id="btnNext-3" name="btnNext-3" ng-click="page3=0;page4=1;">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page 3 -->
            
            <!-- begin page 4 -->
            <div id="page-4" ng-show="page4">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 content" id="content-4">
                        <legend>Basic Finance Setup</legend>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtDbUser" class="col-sm-5 control-label fixPage4Label">Maksimun Pengeluaran/Bulan</label>
                                <div class="col-sm-4 input-group">
                                    <span class="input-group-addon">IDR</span>
                                    <input type="text" id="txtMaxSpend" name="txtMaxSpend" class="form-control txtField" placeholder="Maksimun Pengeluaran">
                                </div>
                                <span id="MaxSpendHelpBlock" class="help-block fixHelpBlockInMaxMinSpend">Format: ###,###,###,###,###.##</span>
                            </div>
                            <div class="form-group">
                                <label for="txtDbUser" class="col-sm-5 control-label fixPage4Label">Minimun Pengeluaran/Bulan</label>
                                <div class="col-sm-4 input-group">
                                    <span class="input-group-addon">IDR</span>
                                    <input type="text" id="txtMinSpend" name="txtMinSpend" class="form-control txtField" placeholder="Minimun Pengeluaran">
                                </div>
                                <span id="MinSpendHelpBlock" class="help-block fixHelpBlockInMaxMinSpend">Format: ###,###,###,###,###.##</span>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <button class="btn btn-danger btn-sm btnPrevNext" id="btnBack-3" name="btnBack-3" ng-click="page4=0;page3=1;">Previous</button>
                                    <button class="btn btn-success btn-sm btnEnding" id="btnSubmit" name="btnSubmit">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
$(document).ready(function(e){
    // Mask PIN for only six digits
    $('#txtPIN1').mask('000000');
        
    // Mask Max Spend Field
    $('#txtMaxSpend,#txtMinSpend').mask('000,000,000,000,000.00',{reverse: true});
 
    // button show pin toggle action
    $('#btnShowToggle').on("click",function(e){
        if($(this).attr('data-toggle') == 0){
            $('#txtPIN1').attr("type","text");
            $(this).html("Hide PIN");
            $(this).attr('data-toggle',1);
        }else{
            $('#txtPIN1').attr("type","password");
            $(this).html("Show PIN")
            $(this).attr('data-toggle',0);
        }
    });
});
</script>
