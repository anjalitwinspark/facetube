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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <!-- Mainly scripts -->
    <!-- <script src=""></script> -->
    <?= $this->Html->script('inspinia.js'); ?>
    <?= $this->Html->script('jquery-2.1.1'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('plugins/metisMenu/jquery.metisMenu.js'); ?>
    <?= $this->Html->script('plugins/slimscroll/jquery.slimscroll.min.js'); ?>
    <!-- <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

    <!-- Custom and plugin javascript -->
    <?= $this->Html->script('plugins/pace/pace.min.js'); ?>
    <!-- <script src="js/plugins/pace/pace.min.js"></script> -->
    <!--Boostrap files  -->
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <?= $this->Html->css('animate.css'); ?>
    <?= $this->Html->css('style.css'); ?>
    <?= $this->Html->css('font-awesome.css'); ?>
    <?= $this->Html->css('bootstrap.min.css'); ?>
    <!-- <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->

</head>
<body>
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <!-- <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul> -->
        </div>
    </nav> -->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
