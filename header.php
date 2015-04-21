<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 20. 4. 2015
 * Time: 23:54
 */
?>

<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebApp</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/vendor/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/vendor/glyphicons/css/glyphicons.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/vendor/glyphicons/css/glyphicons-bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav ng-controller="AppCtrl" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-cube"></i> backgo webapp <label class="label label-success">App</label> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <?php wp_nav_menu(
                    array(
                        'menu' => 'Primary Menu',// name of menu
                        'container' => 'div',// wraps menu in <div> tags
                        'container_id' => 'navbar-collapse',// div id
                        'container_class' => 'navbar-collapse collapse floated', //class name of container div
                        'menu_id' => '',//change ul id
                        'menu_class' => 'nav navbar-nav navbar-with-inside clearfix navbar-right with-border'//ul class name
                    )
                );
                ?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div loading-status-message style="display:none;" class="container">
    <h3 class="page-header"><i class="fa fa-spinner fa-spin"></i> Loading ...</h3>
</div>
<div class="container">

