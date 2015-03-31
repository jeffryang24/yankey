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
        <script src="<?= base_url().'resources/js/angular.min.js' ?>"></script>
        <script src="<?= base_url().'resources/js/jquery.mask.min.js' ?>"></script>
        <title><?= $installer_page_title ?></title>
    </head>
    <body ng-app="instapp" ng-controller="instactrl">
        <div class="container">
            <!-- begin page 1 -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2" id="header">
                    <h3 class="h3_title"><a href="<?= base_url() ?>" target="_self">Title</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 content">
                    <legend class="legend_s">Setup Progress</legend>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            <b>20%</b>
                        </div>
                    </div>
                </div>
            </div>
            <div id="page-1">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 content" id="content-1">
                        <legend class="legend_s">Personal User Configuration</legend>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="txtFirstName" class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" id="txtFirstName" name="txtFirstName" class="form-control txtField" placeholder="First Name">
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
                                    <button class="btn btn-success btn-sm" id="btnNext" name="btnNext">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of page 1 -->
            
            <!-- begin page 2 -->
            <div id="page-2">
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
                                    <button class="btn btn-default" id="showToggle" name="showToggle" type="button" ng-click="changeToggle()">{{toggle}}</button>
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
    var app = angular.module('instapp',[]);
    app.controller('instactrl',function($scope){
        $scope.toggle = 'Show PIN';
        $scope.pinTrigger = 1;
        $scope.changeToggle = function(){
            if($scope.pinTrigger){
                $scope.toggle = 'Show PIN';
                $scope.pinTrigger = !$scope.pinTrigger;
            }else{
                $scope.toggle = 'Hide PIN';
                $scope.pinTrigger = !$scope.pinTrigger;
            }
        }
    });
    $(document).ready(function(e){
        $('#txtPIN1').mask('000000');
    });
</script>
