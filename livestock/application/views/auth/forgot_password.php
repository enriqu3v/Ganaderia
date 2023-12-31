<!DOCTYPE html> 
<html lang="en">
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Rizvi">
        <meta name="keyword" content="Php, Hospital, Clinic, Management, Software, Php, CodeIgniter, Hms, Accounting">
        <link rel="shortcut icon" href="uploads/favicon.png">
        <title><?php echo lang('forgot_password'); ?> - <?php echo lang('livestock'); ?> </title>
        <!-- Bootstrap core CSS -->
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="common/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="common/css/style.css" rel="stylesheet">
        <link href="common/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-body">
        <div class="container">
            <form  class="form-signin" method="post" action="auth/forgot_password">
                <h2 class="form-signin-heading"><?php echo lang('forgot_password'); ?> ?</h2>
                <div class="login-wrap">
                    <h4 class="modal-title"></h4>
                    <div id="infoMessage"><?php
                        if (!empty($message)) {
                            echo"<p>". lang('please_enter_a_valid_email_address') ."<p>";
                        } else {
                            echo "<p>".lang('enter_your_email_address_below_to_reset_your_password')."</p>";
                        }
                        ?></div>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                    <input class="btn btn-success" type="submit" name="submit" value="submit">
                </div>  
            </form>
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="common/js/jquery.js"></script>
        <script src="common/js/bootstrap.min.js"></script>
    </body>
</html>
