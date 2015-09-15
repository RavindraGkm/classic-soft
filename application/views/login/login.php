<!DOCTYPE html>
<html lang="en-us" id="lock-page">
<head>
    <meta charset="utf-8">
    <title> ClassicKitchen</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/smartadmin-production.min.css');
    echo link_tag('assets/css/demo.min.css');
    echo link_tag('assets/css/lockscreen.min.css');
    ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body>
<div id="main" role="main" style="margin-top: -10px;">
    <form action="#" id="login-form" class="lockscreen animated flipInY smart-form client-form">
        <div class="logo">
            <h1 class="semi-bold"><img src="<?php echo base_url('assets/img/logo-o.png')?>" alt="" /> ClassicKitchen</h1>
        </div>
        <div>
            <header> Sign In </header>
            <fieldset>
                <section>
                    <label class="label">User-Name</label>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="email" name="txtusername" id="txtusername">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                </section>
                <section>
                    <label class="label">Password</label>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password" id="password">
                        <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                </section>
            </fieldset>
            <footer>
                <button type="button" id="btn-signin" class="btn btn-primary">Sign in</button>
            </footer>
        </div>
        <p class="font-xs margin-top-5">
            Copyright ClassicKitchen 2014-2020.
        </p>
    </form>
</div>
<!--================================================== -->
<?php
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/plugin/jquery-validate/jquery.validate.min.js');
echo script_tag('assets/js/login/login.js');
?>
<script type="text/javascript">
    $(document).ready( function(){
        new CKE.Login("<?php echo base_url(); ?>");
    });
</script>
</body>
</html>