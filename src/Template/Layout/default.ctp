<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'AdminLTE Test';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Font Awesome -->
    <?= $this->Html->css('../bower_components/font-awesome/css/font-awesome.min.css') ?>
    <!-- Ionicons -->
    <?= $this->Html->css('../bower_components/Ionicons/css/ionicons.min.css') ?>
    <!-- Theme style -->
    <?= $this->Html->css('../dist/css/AdminLTE.min.css') ?>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <?= $this->Html->css('../dist/css/skins/skin-blue.min.css') ?>
    <!-- Google Font -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') ?>

    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body class="skin-blue sidebar-mini layout-boxed" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min=height: 100%;">

        <header class="main-header">
            <a href="" class="logo">Francis's Blog</a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                        <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!--Contains side bar-->
        <?php $roleCell = $this->cell('Role') ?>
        <?= $roleCell ?>

        <!--Content Wrapper. Contains page content-->
        <div class="content-wrapper" style="min-height: 875px;">
            <?= $this->Flash->render() ?>

            <!--Place Content Header Here-->
            <?= $this->element('contentHeader') ?>

            <!--Main Content Here-->
            <section class="content">
                <?= $this->fetch('content') ?>
            </section>
        </div><!--content-wrapper-->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>CakePHP AdminLTE Page <a href="https://adminlte.io">AdminLTE Site</a>.</strong> All rights
            reserved.
        </footer>

    </div><!-- ./wrapper -->
    <?= $this->Html->script('../bower_components/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('../bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
    <?= $this->Html->script('../bower_components/fastclick/lib/fastclick.js') ?>
    <?= $this->Html->script('../dist/js/adminlte.min.js') ?>
    <?= $this->Html->script('../dist/js/demo.js') ?>
    <?= $this->Html->script('sidebar.js') ?>
</body>
</html>
