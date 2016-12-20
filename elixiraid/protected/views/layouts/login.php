<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width">
        <title>Elixir-Aid</title>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/todc-bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme/color_1.css" id="theme">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <style>
            body {padding:80px 0 0}
            textarea, input[type="password"], input[type="text"], input[type="submit"] {-webkit-appearance: none}
            .navbar-brand {font:300 15px/18px 'Roboto', sans-serif}
            .login_wrapper {position:relative;width:380px;margin:0 auto}
            .login_panel {background:#f8f8f8;padding:20px;-webkit-box-shadow: 0 0 0 4px #ededed;-moz-box-shadow: 0 0 0 4px #ededed;box-shadow: 0 0 0 4px #ededed;border:1px solid #ddd;position:relative}
            .login_head {margin-bottom:20px}
            .login_head h1 {margin:0;font:300 20px/24px 'Roboto', sans-serif}
            .login_submit {padding:10px 0}
            .login_panel label a {font-size:11px;margin-right:4px}

            @media (max-width: 767px) {
                body {padding-top:40px}
                .navbar {display:none}
                .login_wrapper {width:100%;padding:0 20px}
            }
        </style>
        <!--[if lt IE 9]>
                <script src="js/ie/html5shiv.js"></script>
                <script src="js/ie/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <div class="login_wrapper">
            <div class="login_panel log_section">
                <div class="login_head">
                    <center> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/ELIXIR-LOGOnew.png" alt="">
                    <h1><br>Log In </h1></center>
                </div>
                 <?php echo $content; ?>

            </div>
            <div class="login_panel reg_section" style="display:none">

            </div>
        </div>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
        <!-- jquery cookie -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery_cookie.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lib/parsley/parsley.min.js"></script>
        <script>
            $(function () {

                //* validation
                $('#login_form').parsley({
                    errors: {
                        classHandler: function (elem, isRadioOrCheckbox) {
                            if (isRadioOrCheckbox) {
                                return $(elem).closest('.form_sep');
                            }
                        },
                        container: function (element, isRadioOrCheckbox) {
                            if (isRadioOrCheckbox) {
                                return element.closest('.form_sep');
                            }
                        }
                    }
                });

                //* change form
                $('.form_toggle').on('click', function (e) {
                    $('.login_panel').slideToggle(function () {
                        if ($('.log_section').is(':visible')) {
                            $('.login_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
                        } else {
                            $('.register_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
                        }
                    });
                    e.preventDefault();
                });

                $('.login_toggle').on('click', function (e) {
                    if ($('.log_section').is(':hidden')) {
                        $('.reg_section').slideUp();
                        $('.log_section').slideDown();
                        $(this).closest('li').addClass('active').siblings('li').removeClass('active');
                    }
                    e.preventDefault();
                });
                $('.register_toggle').on('click', function (e) {
                    if ($('.reg_section').is(':hidden')) {
                        $('.log_section').slideUp();
                        $('.reg_section').slideDown();
                        $(this).closest('li').addClass('active').siblings('li').removeClass('active');
                    }
                    e.preventDefault();
                });

                // set theme from cookie
                if ($.cookie('ebro_color') != undefined) {
                    $('#theme').attr('href', 'css/theme/' + $.cookie('ebro_color') + '.css');
                }

            });
        </script>
    </body>
</html>