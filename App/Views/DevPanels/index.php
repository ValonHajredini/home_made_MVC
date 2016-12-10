<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php \Core\View::plugin('bootstrap/css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?php \Core\View::style('main.css')?>" />
    <link rel="stylesheet" href="<?php \Core\View::style('theme.css')?>" />
    <link rel="stylesheet" href="<?php \Core\View::style('MoneAdmin.css')?>" />
    <link rel="stylesheet" href="<?php \Core\View::plugin('Font-Awesome/css/font-awesome.css')?>" />
    <link href="<?php \Core\View::style('jquery-ui.css')?>" rel="stylesheet" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->

    <link href="<?php \Core\View::style('layout2.css')?>" rel="stylesheet" />
    <!--    Plugind   -->
    <link href="<?php \Core\View::plugin('flot/examples/examples.css')?>" rel="stylesheet" />

    <link href="<?php \Core\View::plugin('timeline/timeline.css')?>" rel="stylesheet" />

    <link href="<?php \Core\View::plugin('uniform/themes/default/css/uniform.default.css')?>" rel="stylesheet" />
    <link href="<?php \Core\View::plugin('inputlimiter/jquery.inputlimiter.1.0.css')?>" rel="stylesheet" />
    <link href="<?php \Core\View::plugin('chosen/chosen.min.css')?>" rel="stylesheet" />

    <link href="<?php \Core\View::plugin('tagsinput/jquery.tagsinput.css')?>" rel="stylesheet" />
    <link href="<?php \Core\View::plugin('daterangepicker/daterangepicker-bs3.css')?>" rel="stylesheet" />
    <link href="<?php \Core\View::plugin('datepicker/css/datepicker.css')?>" rel="stylesheet" />
<!--    <link href="--><?php //\Core\View::plugin('timepicker/css/bootstrap-timepicker.min.css')?><!--" rel="stylesheet" />-->
    <link href="<?php \Core\View::plugin('switch/static/stylesheets/bootstrap-switch.css')?>" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >

<!-- MAIN WRAPPER -->
<div id="wrap" >


    <!-- HEADER SECTION -->
    <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                <i class="icon-align-justify"></i>
            </a>
            <!-- LOGO SECTION -->
            <header class="navbar-header">

                <a href="index.html" class="navbar-brand">
<!--                    <img src="assets/img/logo.png" alt="" />-->
                    <img src="<?php \Core\View::img('logo.png')?>" alt="" height="40"/>

                </a>
            </header>
            <!-- END LOGO SECTION -->
            <ul class="nav navbar-top-links navbar-right">



                
                <!--ADMIN SETTINGS SECTIONS -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="icon-user"></i> User Profile </a>
                        </li>
                        <li><a href="#"><i class="icon-gear"></i> Settings </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                        </li>
                    </ul>

                </li>
                <!--END ADMIN SETTINGS -->
            </ul>

        </nav>

    </div>
    <!-- END HEADER SECTION -->



    <!-- MENU SECTION -->
    <div id="left" >

        <ul id="menu" class="collapse">


            <li class="panel active">
                <a href="index.html" >
                    <i class="icon-table"></i> Development Panel


                </a>
            </li>



            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="icon-tasks"> </i> UI Elements

                    <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-default">10</span>&nbsp;
                </a>
                <ul class="collapse" id="component-nav">

                    <li class=""><a href="button.html"><i class="icon-angle-right"></i> Buttons </a></li>
                    <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Icons </a></li>
                    <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Progress </a></li>
                    <li class=""><a href="tabs_panels.html"><i class="icon-angle-right"></i> Tabs & Panels </a></li>
                    <li class=""><a href="notifications.html"><i class="icon-angle-right"></i> Notification </a></li>
                    <li class=""><a href="more_notifications.html"><i class="icon-angle-right"></i> More Notification </a></li>
                    <li class=""><a href="modals.html"><i class="icon-angle-right"></i> Modals </a></li>
                    <li class=""><a href="wizard.html"><i class="icon-angle-right"></i> Wizard </a></li>
                    <li class=""><a href="sliders.html"><i class="icon-angle-right"></i> Sliders </a></li>
                    <li class=""><a href="typography.html"><i class="icon-angle-right"></i> Typography </a></li>
                </ul>
            </li>
            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                    <i class="icon-pencil"></i> Forms

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-success">5</span>&nbsp;
                </a>
                <ul class="collapse" id="form-nav">
                    <li class=""><a href="forms_general.html"><i class="icon-angle-right"></i> General </a></li>
                    <li class=""><a href="forms_advance.html"><i class="icon-angle-right"></i> Advance </a></li>
                    <li class=""><a href="forms_validation.html"><i class="icon-angle-right"></i> Validation </a></li>
                    <li class=""><a href="forms_fileupload.html"><i class="icon-angle-right"></i> FileUpload </a></li>
                    <li class=""><a href="forms_editors.html"><i class="icon-angle-right"></i> WYSIWYG / Editor </a></li>
                </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                    <i class="icon-table"></i> Pages

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-info">6</span>&nbsp;
                </a>
                <ul class="collapse" id="pagesr-nav">
                    <li><a href="pages_calendar.html"><i class="icon-angle-right"></i> Calendar </a></li>
                    <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Timeline </a></li>
                    <li><a href="pages_social.html"><i class="icon-angle-right"></i> Social </a></li>
                    <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Pricing </a></li>
                    <li><a href="pages_offline.html"><i class="icon-angle-right"></i> Offline </a></li>
                    <li><a href="pages_uc.html"><i class="icon-angle-right"></i> Under Construction </a></li>
                </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                    <i class="icon-bar-chart"></i> Charts

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-danger">4</span>&nbsp;
                </a>
                <ul class="collapse" id="chart-nav">



                    <li><a href="charts_line.html"><i class="icon-angle-right"></i> Line Charts </a></li>
                    <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Bar Charts</a></li>
                    <li><a href="charts_pie.html"><i class="icon-angle-right"></i> Pie Charts </a></li>
                    <li><a href="charts_other.html"><i class="icon-angle-right"></i> other Charts </a></li>
                </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                    <i class=" icon-sitemap"></i> 3 Level Menu

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                </a>
                <ul class="collapse" id="DDL-nav">
                    <li>
                        <a href="#" data-parent="#DDL-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL1-nav">
                            <i class="icon-sitemap"></i>&nbsp; Demo Link 1

                            <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>


                        </a>
                        <ul class="collapse" id="DDL1-nav">
                            <li>
                                <a href="#"><i class="icon-angle-right"></i> Demo Link 1 </a>

                            </li>
                            <li>
                                <a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                            <li>
                                <a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>

                        </ul>

                    </li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
                </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
                    <i class=" icon-folder-open-alt"></i> 4 Level Menu

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                </a>
                <ul class="collapse" id="DDL4-nav">
                    <li>
                        <a href="#" data-parent="DDL4-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_1-nav">
                            <i class="icon-sitemap"></i>&nbsp; Demo Link 1

                            <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>


                        </a>
                        <ul class="collapse" id="DDL4_1-nav">
                            <li>

                                <a href="#" data-parent="#DDL4_1-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_2-nav">
                                    <i class="icon-sitemap"></i>&nbsp; Demo Link 1

                                    <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>
                                </a>
                                <ul class="collapse" id="DDL4_2-nav">



                                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 1 </a></li>
                                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                                </ul>



                            </li>
                            <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                        </ul>

                    </li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                    <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
                </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                    <i class="icon-warning-sign"></i> Error Pages

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-warning">5</span>&nbsp;
                </a>
                <ul class="collapse" id="error-nav">
                    <li><a href="errors_403.html"><i class="icon-angle-right"></i> Error 403  </a></li>
                    <li><a href="errors_404.html"><i class="icon-angle-right"></i> Error 404  </a></li>
                    <li><a href="errors_405.html"><i class="icon-angle-right"></i> Error 405  </a></li>
                    <li><a href="errors_500.html"><i class="icon-angle-right"></i> Error 500  </a></li>
                    <li><a href="errors_503.html"><i class="icon-angle-right"></i> Error 503  </a></li>
                </ul>
            </li>


            <li><a href="gallery.html"><i class="icon-film"></i> Image Gallery </a></li>
            <li><a href="tables.html"><i class="icon-table"></i> Data Tables </a></li>
            <li><a href="maps.html"><i class="icon-map-marker"></i> Maps </a></li>

            <li><a href="grid.html"><i class="icon-columns"></i> Grid </a></li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                    <i class="icon-check-empty"></i> Blank Pages

                    <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-success">2</span>&nbsp;
                </a>
                <ul class="collapse" id="blank-nav">

                    <li><a href="blank.html"><i class="icon-angle-right"></i> Blank Page One  </a></li>
                    <li><a href="blank2.html"><i class="icon-angle-right"></i> Blank Page Two  </a></li>
                </ul>
            </li>
            <li><a href="login.html"><i class="icon-signin"></i> Login Page </a></li>

        </ul>

    </div>
    <!--END MENU SECTION -->



    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height: 700px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Development Dashboard</h1>
                </div>
            </div>
            <hr />
            <!--BLOCK SECTION -->
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center;">

                        <a class="quick-btn" href="#">
                            <i class="glyphicon glyphicon-calendar"></i>
                            <span>Migration</span>
                            <span class="label label-success">Add new</span>
                        </a>

                        <a class="quick-btn" href="#">
                            <i class="glyphicon glyphicon-retweet "></i>
                            <span>Controller</span>
                            <span class="label label-success">Add new</span>
                        </a>
                        <a class="quick-btn" href="#">
                            <i class="glyphicon glyphicon-tasks "></i>
<!--                            <i class="fa fa-database" aria-hidden="true"></i>-->
                            <span>Model</span>
                            <span class="label label-success">Add new</span>
                        </a>
                        <a class="quick-btn" href="#">
                            <i class="glyphicon glyphicon-compressed"></i>
                            <span>Scaffold</span>
                            <span class="label label-success">Add new</span>
                        </a>
                        <a class="quick-btn" href="#">
                            <i class="glyphicon glyphicon-dashboard"></i>
                            <span>Admin Panel</span>
                            <span class="label label-success">Add new</span>
                        </a>
<!--                        <a class="quick-btn" href="#">-->
<!--                            <i class="icon-bolt icon-2x"></i>-->
<!--                            <span>Tickets</span>-->
<!--                            <span class="label label-default">20</span>-->
<!--                        </a>-->



                    </div>

                </div>

            </div>
            <!--END BLOCK SECTION -->
            <hr />
            <!-- CHART & CHAT  SECTION -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            New Model
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo \Core\Controller::path('developmentpanel/DevPanels/createmodel')?>" method="post">

                                <div class="form-group">
                                    <label for="modelName" class="control-label col-lg-2">Model name</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="modelName" name="modelName" placeholder="Model Name" class="form-control">
                                    </div>
                                    <label for="modelName" class="control-label col-lg-3">Number of fields</label>
                                    <div class="col-lg-3">
                                        <input type="number" id="fNumber" name="fNumber" placeholder="Number of fields" class="form-control" onblur="generateFields()">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="commentMod" class="control-label col-lg-12" style="text-align: left; margin-bottom: 12px;">Leav a comment on the model class:</label>
                                    <div class="col-lg-12">
                                        <textarea name="commentMod" id="commentMod" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h3>Columns:</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Column Number:</th>
                                            <th>Field Name</th>
                                            <th>Field Type</th>
                                            <th>Require</th>
                                            <th>Max LEngth</th>
                                        </tr>
                                        </thead>
                                        <tbody id="fieldGenerator">
                                        

                                        </tbody>
                                    </table>
                                </div>
                                <div class="fields"></div>






                        </div>
                        <input type="hidden" onsubmit="$('fNumber').val()">
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-offset-9 col-md-3">
                                    <input type="submit" name="saveModel" value="Save Model" class="btn btn-primary pull-right">
                                </div>
                            </div>

                        </div>

                        </form>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="success">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modal Example
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                Launch Demo Modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <div class="col-md-4">
                   <div class="row">
                       <div class="panel panel-primary">
                           <div class="panel-heading">
                               Migrationes, Models, Controllers, Scaffolds
                           </div>
                           <div class="panel-body">


                               <div class="col-lg-12 col-md-12">
                                   <div class="box">
                                       <header>
                                           <h5>Models</h5>
                                           <div class="toolbar">
                                               <div class="btn-group">
                                                   <a href="#models" data-toggle="collapse" class="btn btn-default btn-sm accordion-toggle minimize-box">
                                                       <i class="icon-chevron-up"></i>
                                                   </a>
                                               </div>
                                           </div>
                                       </header>
                                       <div id="models" class="body collapse in">
                                           <table class="table table-bordered sortableTable responsive-table">
                                               <thead>
                                               <tr>
                                                   <th>#<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                                   <th>Model Name<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                                   <th>Table Name<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                                <?php $nr = 1?>
                                               <?php foreach ($models as $model => $table):?>
                                               <tr>
                                                   <td><?php echo $nr?></td>
                                                   <td><?php echo $model?></td>
                                                   <td><?php echo $table?></td>

                                               </tr>
                                                   <?php  $nr++ ?>
                                               <?php endforeach;?>


                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                                   <!--                    <div class="panel panel-primary">-->
                                   <!--                        <div class="panel-heading ">-->
                                   <!--                            Collapsible Accordion Panel Group-->
                                   <!--                        </div>-->
                                   <!--                        <div class="panel-body">-->
                                   <!--                            <div class="panel-group" id="accordion">-->
                                   <!--                                <div class="panel panel-default">-->
                                   <!--                                    <div class="panel-heading">-->
                                   <!--                                        <h4 class="panel-title">-->
                                   <!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a>-->
                                   <!--                                        </h4>-->
                                   <!--                                    </div>-->
                                   <!--                                    <div id="collapseOne" class="panel-collapse collapse in">-->
                                   <!--                                        <div class="panel-body">-->
                                   <!--                                            Lorem ipsum dolor sit amet, luaute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
                                   <!--                                        </div>-->
                                   <!--                                    </div>-->
                                   <!--                                </div>-->
                                   <!--                                <div class="panel panel-default">-->
                                   <!--                                    <div class="panel-heading">-->
                                   <!--                                        <h4 class="panel-title">-->
                                   <!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>-->
                                   <!--                                        </h4>-->
                                   <!--                                    </div>-->
                                   <!--                                    <div id="collapseTwo" class="panel-collapse collapse">-->
                                   <!--                                        <div class="panel-body">-->
                                   <!--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                                   <!--                                        </div>-->
                                   <!--                                    </div>-->
                                   <!--                                </div>-->
                                   <!--                                <div class="panel panel-default">-->
                                   <!--                                    <div class="panel-heading">-->
                                   <!--                                        <h4 class="panel-title">-->
                                   <!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a>-->
                                   <!--                                        </h4>-->
                                   <!--                                    </div>-->
                                   <!--                                    <div id="collapseThree" class="panel-collapse collapse">-->
                                   <!--                                        <div class="panel-body">-->
                                   <!--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                                   <!--                                        </div>-->
                                   <!--                                    </div>-->
                                   <!--                                </div>-->
                                   <!--                            </div>-->
                                   <!--                        </div>-->
                                   <!--                    </div>-->
                               </div>
                           </div>
                           <div class="panel-footer">
                               Migrationes, Models, Controllers, Scaffolds
                           </div>
                       </div>


                   </div>
               </div>
            </div>
            <!--END CHAT & CHAT SECTION -->
            <!-- COMMENT AND NOTIFICATION  SECTION -->
            <div class="row">
                <div class="col-lg-7">

                    <div class="chat-panel panel panel-success">
                        <div class="panel-heading">
                            <i class="icon-comments"></i>
                            New Comments

                        </div>

                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                        <span class="chat-img pull-left">
<!--                                            <img src="assets/img/1.png" alt="User Avatar" class="img-circle" />-->
                                            <img src="<?php \Core\View::img('1.png')?>" alt="User Avatar" class="img-circle" />
                                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font "> Jack Sparrow </strong>
                                            <small class="pull-right text-muted label label-danger">
                                                <i class="icon-time"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                        <span class="chat-img pull-right">
<!--                                            <img src="assets/img/2.png" alt="User Avatar" class="img-circle" />-->
                                            <img src="<?php \Core\View::img('2.png')?>" alt="User Avatar" class="img-circle" />
                                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted label label-info">
                                                <i class="icon-time"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font"> Jhony Deen</strong>
                                        </div>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                        <span class="chat-img pull-left">
<!--                                            <img src="assets/img/3.png" alt="User Avatar" class="img-circle" />-->
                                            <img src="<?php \Core\View::img('3.png')?>" alt="User Avatar" class="img-circle" />
                                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font"> Jack Sparrow </strong>
                                            <small class="pull-right text-muted label label-warning">
                                                <i class="icon-time"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit amet, bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                        <span class="chat-img pull-right">
<!--                                            <img src="assets/img/4.png" alt="User Avatar" class="img-circle" />-->
                                            <img src="<?php \Core\View::img('4.png')?>" alt="User Avatar" class="img-circle" />
                                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted label label-primary">
                                                <i class="icon-time"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font"> Jhony Deen</strong>
                                        </div>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur a dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your comment here..." />
                                <span class="input-group-btn">
                                        <button class="btn btn-success btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-lg-5">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <i class="icon-bell"></i> Notifications Alerts Panel
                        </div>

                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class=" icon-comment"></i> New Comment
                                    <span class="pull-right text-muted small"><em> 4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="icon-twitter"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em> 12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small"><em> 27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="icon-warning-sign"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>

                                <a href="#" class="list-group-item">
                                    <i class="icon-ok"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class=" icon-money"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>

                            <a href="#" class="btn btn-default btn-block btn-primary">View All Alerts</a>
                        </div>

                    </div>



                </div>
            </div>
            <!-- END COMMENT AND NOTIFICATION  SECTION -->


            <!--TABLE, PANEL, ACCORDION AND MODAL  -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="box">
                        <header>
                            <h5>Simple Table</h5>
                            <div class="toolbar">
                                <div class="btn-group">
                                    <a href="#sortableTable" data-toggle="collapse" class="btn btn-default btn-sm accordion-toggle minimize-box">
                                        <i class="icon-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                        </header>
                        <div id="sortableTable" class="body collapse in">
                            <table class="table table-bordered sortableTable responsive-table">
                                <thead>
                                <tr>
                                    <th>#<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                    <th>First Name<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                    <th>Last Name<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                    <th>Score<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <td>1</td>
                                    <td>Jill</td>
                                    <td>Smith</td>
                                    <td>50</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Eve</td>
                                    <td>Jackson</td>
                                    <td>94</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>80</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Adam</td>
                                    <td>Johnson</td>
                                    <td>67</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            New Model
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="success">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modal Example
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                Launch Demo Modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--TABLE, PANEL, ACCORDION AND MODAL  -->


        </div>

    </div>
    <!--END PAGE CONTENT -->

    <!-- RIGHT STRIP  SECTION -->
    <div id="right">


        <div class="well well-small">
            <ul class="list-unstyled">
                <li>some stats &nbsp; : <span>123</span></li>
<!--                --><?php //print_r($models);?>

            </ul>
        </div>
        <div class="well well-small">
            <button class="btn btn-block"> Help </button>
            <button class="btn btn-primary btn-block"> Tickets</button>
            <button class="btn btn-info btn-block"> New </button>
            <button class="btn btn-success btn-block"> Users </button>
            <button class="btn btn-danger btn-block"> Profit </button>
            <button class="btn btn-warning btn-block"> Sales </button>
            <button class="btn btn-inverse btn-block"> Stock </button>
        </div>
        <div class="well well-small">
            <span>Profit</span><span class="pull-right"><small>20%</small></span>

            <div class="progress mini">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <span>Sales</span><span class="pull-right"><small>40%</small></span>

            <div class="progress mini">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <span>Pending</span><span class="pull-right"><small>60%</small></span>

            <div class="progress mini">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <span>Summary</span><span class="pull-right"><small>80%</small></span>

            <div class="progress mini">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
        </div>




    </div>
    <!-- END RIGHT STRIP  SECTION -->
</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>&copy;  Ekopro &nbsp;2016 &nbsp;</p>
</div>
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<!--<script src="assets/plugins/jquery-2.0.3.min.js"></script>-->
<script src="<?php \Core\View::plugin('jquery/jquery-2.0.3.min.js')?>"></script>

<!--<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->
<script src="<?php \Core\View::plugin('bootstrap/js/bootstrap.min.js')?>"></script>
<!---->
<!--<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
<script src="<?php \Core\View::plugin('modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<!--<script src="assets/js/jquery-ui.min.js"></script>-->
<script src="<?php \Core\View::script('jquery-ui.min.js')?>"></script>

<!--<script src="assets/plugins/uniform/jquery.uniform.min.js"></script>-->
<script src="<?php \Core\View::plugin('uniform/jquery.uniform.min.js')?>"></script>
<!--<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>-->
<script src="<?php \Core\View::plugin('inputlimiter/jquery.inputlimiter.1.3.1.min.js')?>"></script>
<!--<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>-->
<script src="<?php \Core\View::plugin('chosen/chosen.jquery.min.js')?>"></script>
<!--<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>-->
<script src="<?php \Core\View::plugin('colorpicker/js/bootstrap-colorpicker.js')?>"></script>
<!--<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>-->
<script src="<?php \Core\View::plugin('tagsinput/jquery.tagsinput.min.js')?>"></script>
<!--<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>-->
<script src="<?php \Core\View::plugin('validVal/js/jquery.validVal.min.js')?>"></script>
<!--<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>-->
<script src="<?php \Core\View::plugin('daterangepicker/daterangepicker.js')?>"></script>
<!--<script src="assets/plugins/daterangepicker/moment.min.js"></script>-->
<script src="<?php \Core\View::plugin('daterangepicker/moment.min.js')?>"></script>
<!--<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>-->
<script src="<?php \Core\View::plugin('datepicker/js/bootstrap-datepicker.js')?>"></script>
<!--<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>-->
<!--<script src="--><?php //\Core\View::plugin('bootstrap-timepicker.min.js')?><!--"></script>-->
<script src="<?php \Core\View::plugin('switch/static/js/bootstrap-switch.min.js')?>"></script>
<!--<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>-->
<script src="<?php \Core\View::plugin('jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js')?>"></script>
<!--<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>-->
<script src="<?php \Core\View::plugin('autosize/jquery.autosize.min.js')?>"></script>
<!--<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>-->
<script src="<?php \Core\View::plugin('jasny/js/bootstrap-inputmask.js')?>"></script>

<!--<script src="assets/plugins/flot/jquery.flot.js"></script>-->

<!--<script src="assets/js/formsInit.js"></script>-->
<!--<script src="--><?php //\Core\View::script('formsInit.js')?><!--"></script>-->
<!--<script src="assets/js/for_index.js"></script>-->









<script>

//    $(function () { formInit(); });

</script>
<script>
    function generateFields(){
        var value = $('#fNumber').val();
        if (value > 20){
            alert('no more fields als 20');
            $('#fNumber').val('20');
            value = 20;
        }
        value = parseInt(value);
        $('#fieldGenerator').html("");
        for (i = 1; i <= value; i++) {
            $('#fieldGenerator').append("<tr>" +
                "<td>"+i+"</td>" +
                "<td><input type='text' class=\"form-control\" id='field_"+i+"' name='field_"+i+"'></td>" +
                "<td>" +
                "<select data-placeholder='Your Favorite Type of Bear' class='form-control chzn-select chzn-rtl' tabindex='9' id='type_"+i+"' name='type_"+i+"'>" +
                "<option value='string' selected='selected'>String</option>" +
                "<option value='integer'>Integer</option>" +
                "<option value='longtext'>Text</option>" +
                "<option value='timestamp'>Timestamp</option>" +
                "</select>" +
                "</td>" +
                "<td>" +

                "<div class='checkbox anim-checkbox'>"+
                "<input type='checkbox' id='require_"+i+"' name='require_"+i+"' valeue='true' class='success'>" +
                "<label for='require_"+i+"'>Require</label>" +
                "</div>" +

                "</td>" +
                "<td><input type='number' class=\"form-control\"  id='maxLength_"+i+"' name='maxLength_"+i+"'></td>" +
                "<tr>");
        }


    }
</script>




</body>


<!--for (i = 1; i <= value; i++) {-->
<!--$('.fields').append("<div class='form-group'>" +-->
<!--    "<label for='column_"+i+"' class='control-label col-lg-3'>Column name</label>" +-->
<!--    "<div class='col-lg-5'>" +-->
<!--        "<input type='text' id='field_"+i+"' name='field_"+i+"' placeholder='Colomn Name' class='form-control'>" +-->
<!--        "</div>" +-->
<!--    "<div class='col-lg-4'>" +-->
<!--        "<select data-placeholder='Your Favorite Type of Bear' class='form-control chzn-select chzn-rtl' tabindex='9' id='type_"+i+"' name='type_"+i+"'>" +-->
<!--            "<option value='string' selected='selected'>String</option>" +-->
<!--            "<option value='integer'>Integer</option>" +-->
<!--            "<option value='longtext'>Text</option>" +-->
<!--            "<option value='timestamp'>Timestamp</option>" +-->
<!--            "</select>" +-->
<!--        "</div>" +-->
<!--    "</div>");-->
<!--}-->


"<div class=\"make-switch has-switch\" data-on="success\" data-off=\"warning\">"+
"<div class=\"switch-on\"><input type=\"checkbox\" checked=\"checked\"><span class=\"switch-left switch-success\">ON</span><label>&nbsp;</label><span class=\"switch-right switch-warning\">OFF</span></div>" +
</div>" +
</html>
