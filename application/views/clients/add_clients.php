<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> ClassicKitchen </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
        echo link_tag('assets/css/bootstrap.min.css');
        echo link_tag('assets/css/font-awesome.min.css');
        echo link_tag('assets/css/smartadmin-production.min.css');
        echo link_tag('assets/css/smartadmin-skins.min.css');
        echo link_tag('assets/css/demo.min.css');
    ?>
<body class="">
<header id="header">
    <div id="logo-group">
        <span id="logo"> <img src="<?php echo base_url('assets/img/logo.png')?>" alt="SmartAdmin"> </span>
    </div>
    <div class="pull-right">
        <div id="logout" class="btn-header transparent pull-right">
                <span class="">
                    <?php echo anchor('logins/logins','<i class="fa fa-sign-out">Sign out</i>');?>
                </span>
        </div>
    </div>
</header>
<aside id="left-panel">
    <nav>
        <ul>
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">View</span></a>
                <ul>
                    <li>
                        <?php echo anchor('clients/show-clients','<span class="menu-item-parent">Clients Data</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('items/show-items','<span class="menu-item-parent">Items Data</span>');?>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Add</span></a>
                <ul>
                    <li class="active">
                        <?php echo anchor('clients/add-client','<span class="menu-item-parent">Add Clients</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('items/add-item','<span class="menu-item-parent">Add Items</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
            </li>
        </ul>
    </nav>
</aside>
<div id="main" role="main">
    <div id="ribbon">
        <ol class="breadcrumb">
            <li>Home></li><li>Add</li><li>Add Clients</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Add
                    <span>> Add Clients </span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Clients Add</h2>
                        </header>
                        <div>
                            <div class="jarviswidget-editbox">
                            </div>
                            <div class="widget-body no-padding col-md-12">
                                <form id="clients-add" method="POST" class="smart-form" novalidate="novalidate">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                    <input type="text" name="fname" id="fullname" placeholder="Client's Name">
                                                </label>
                                            </section>
                                            <section class="col col-6">
                                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                                    <input type="tel" name="phone" id="contact" placeholder="Phone" data-mask="(999) 999-9999">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <section>
                                            <label class="textarea">
                                                <textarea rows="3" name="addres" id="address" placeholder="Address"></textarea>
                                            </label>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="button" class="btn btn-primary" id="btn-submit">
                                            Save Client
                                        </button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Classic Equipments © 2013-2014</span>
        </div>
    </div>
</div>
<!--================================================== -->
<?php
    echo script_tag('assets/js/jquery.js');
    echo script_tag('assets/js/plugin/pace/pace.min.js');
    echo script_tag('assets/js/app.config.js');
    echo script_tag('assets/js/app.min.js');
    echo script_tag('assets/js/clients/add_clients.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new CKE.Addclient();
    });
</script>
</body>
</html>