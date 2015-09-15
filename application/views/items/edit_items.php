<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title> ClassicKitchen </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    echo link_tag('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700');
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/font-awesome.min.css');
    echo link_tag('assets/css/smartadmin-production.min.css');
    echo link_tag('assets/css/smartadmin-skins.min.css');
    echo link_tag('assets/css/demo.min.css');
    ?>
<body class="">
<input type="hidden" id="item_id" value="<?php echo $item_id; ?>" />
<header id="header">
    <div id="logo-group">
        <span id="logo">
            <?php echo img(array('src' => 'assets/img/logo.png', 'alt' => 'SmartAdmin')); ?>
        </span>
    </div>
    <div class="pull-right">
        <div id="logout" class="btn-header transparent pull-right">
            <span>
                <?php echo anchor('logins/logins','<i class="fa fa-sign-out"></i>Sign out');?>
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
                    <li>
                        <?php echo anchor('clients/add-client','<span class="menu-item-parent">Add Clients</span>');?>
                    </li>
                    <li class="active">
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
            <li>Home></li><li>Edit</li><li>Edit Items</li>
        </ol>
    </div>
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa-fw fa fa-pencil-square-o"></i>Edit
                    <span>> Edit Items</span>
                </h1>
            </div>
        </div>
        <section id="widget-grid" class="">
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-9">
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Items Edit</h2>
                        </header>
                        <div>
                            <div class="widget-body no-padding col-md-12">
                                <form id="items-add" method="POST" class="smart-form" novalidate="novalidate">
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-4">
                                                <label class="input">
                                                    <input type="text" name="item_name" id="txt-item-id" placeholder="Enter Item id..">
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-4">
                                                <label class="label">Select Item Category</label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-4">
                                                <label class="select">
                                                    <select name="country" id="select-category">
                                                        <option value="0" selected="" disabled="">Select Category</option>
                                                        <option value="Cooking Equipments">Cooking Equipments</option>
                                                        <option value="Refrigeration Equipments">Refrigeration Equipments</option>
                                                        <option value="Table & Sinks">Table & Sinks</option>
                                                        <option value="Trolley & Racks">Trolley & Racks</option>
                                                        <option value="Display Cabinets">Display Cabinets</option>
                                                        <option value="Live Counters">Live Counters</option>
                                                        <option value="Preparation Equipments">Preparation Equipments</option>
                                                        <option value="Island Kitchen">Island Kitchen</option>
                                                        <option value="Exhaust Equipments">Exhaust Equipments</option>
                                                        <option value="Imported Products">Imported Products</option>
                                                    </select> <i></i>
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-4">
                                                <label class="input">
                                                    <input type="text" name="item_name" id="itemname" placeholder="Item Name">
                                                </label>
                                            </section>
                                            <section class="col col-4">
                                                <label class="input">
                                                    <input type="tel" name="item_code" id="itemcode" placeholder="Item Code">
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-2">
                                                <label class="select">Dimensions</label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-2">
                                                <label class="input">
                                                    <input type="text" name="item_name" id="d1" placeholder="Dimension 1">
                                                </label>
                                            </section>
                                            <section class="col col-2">
                                                <label class="input">
                                                    <input type="text" name="item_name" id="d2" placeholder="Dimension 2">
                                                </label>
                                            </section>
                                            <section class="col col-2">
                                                <label class="input">
                                                    <input type="text" name="item_name" id="d3" placeholder="Dimension 3">
                                                </label>
                                            </section>
                                            <section class="col col-2">
                                                <label class="input">
                                                    <input type="text" class="disabled" name="item_name" id="d4" placeholder="Dimension 4">
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="checkbox">
                                                    <input type="checkbox" name="subscription" id="chkd4">
                                                    <i></i>Click to Add 4th Dimension.
                                                </label>
                                            </section>
                                        </div>
                                    </fieldset>
                                    <footer>
                                        <button type="button" class="btn btn-primary" id="btn-updateItem">
                                            Update
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
echo script_tag('assets/js/jquery-1.11.1.min.js');
echo script_tag('assets/js/app.config.js');
echo script_tag('assets/js/plugin/pace/pace.min.js');
echo script_tag('assets/js/app.min.js');
echo script_tag('assets/js/items/edit_items.js')
?>
<script type="text/javascript">
    $(document).ready(function(){
        new CKE.EditItems("<?php echo base_url(); ?>");
    });
</script>
</body>
</html>