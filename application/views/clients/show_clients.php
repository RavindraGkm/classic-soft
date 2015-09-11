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
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body class="">
<header id="header">
    <div id="logo-group">
        <span id="logo"> <img src="assets/img/logo.png" alt="SmartAdmin"> </span>
    </div>
    <div class="pull-right">
        <div id="logout" class="btn-header transparent pull-right">
            <span> <?php echo anchor('logins/logins','<i class="fa fa-sign-out">Sign out</i>');?> </span>
        </div>
    </div>
</header>
<aside id="left-panel">
    <nav>
        <ul>
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">View</span></a>
                <ul>
                    <li class="active">
                        <?php echo anchor('clients/show-clients','<span class="menu-item-parent">Clients Data</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('items/show-items','<span class="menu-item-parent">Items Data</span>');?>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Add</span></a>
                <ul>
                    <li>
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
            <li>Home</li><li>View</li><li>Clients View</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>View
                        <span>>
						    Clients View
						</span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Clients View</h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding">
                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">ID</th>
                                        <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>CLIENT NAME</th>
                                        <th data-hide="phone"><i class="fa fa-fw fa-mobile text-muted hidden-md hidden-sm hidden-xs"></i> CONTACT</th>
                                        <th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> ADDRESS</th>
                                    </tr>
                                    </thead>
                                    <tbody id="client-data-json"></tbody>
                                </table>
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
    echo script_tag('assets/js/bootstrap/bootstrap.min.js');
    echo script_tag('assets/js/app.min.js');
    echo script_tag('assets/js/plugin/datatables/jquery.dataTables.min.js');
    echo script_tag('assets/js/plugin/datatable-responsive/datatables.responsive.min.js');
    echo script_tag('assets/js/plugin/select2/select2.min.js');
    echo script_tag('assets/js/clients/show_clients.js');
?>
<script type="text/javascript">
    $(document).ready(function(){
        new CKE.Showclients();
    });
</script>


<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

</body>

</html>