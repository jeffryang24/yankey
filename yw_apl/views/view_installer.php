<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Installer Page For Yankee-Whiskey">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url().'resources/css/installer.css' ?>">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <title><?= $installer_page_title ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" id="header">
                    <h3 class="h3_title"><a href="<?= base_url() ?>" target="_self">Title</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2" id="content">
                    <legend class="legend_s">Setup Progress</legend>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            <b>20%</b>
                        </div>
                    </div>
                    <legend class="legend_s">Personal User Configuration</legend>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="txtFirstName" class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-4">
                                <input type="text" id="txtFirstName" name="txtFirstName" class="form-control txtField" placeholder="first name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtLastName" class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-4">
                                <input type="text" id="txtLastName" name="txtLastName" class="form-control txtField" placeholder="last name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
