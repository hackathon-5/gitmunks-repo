<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Trek - Travel like you live there';
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
    <!-- <?= $this->Html->meta('icon') ?> -->
    <?= $this->Html->meta(
        'favicon.ico',
        '/favicon.ico',
        ['type' => 'icon']
    );
    ?>

    <?= $this->Html->css('/js/components/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->AssetCompress->css('base.css') ?>

    <?= $this->Html->script('components/jquery/dist/jquery'); ?>
    <?= $this->Html->script('components/underscore/underscore-min'); ?>
    <?= $this->Html->script('main.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href='https://fonts.googleapis.com/css?family=Gentium+Book+Basic:400italic|Open+Sans:700,300' rel='stylesheet' type='text/css'>
</head>
<body class="<?= !empty($body_class)?$body_class: ''; ?>">
    <?php include_once('svg-defs.svg'); ?>
    <header>
        <a href="#" id="hamburger">
            <svg class="hamburger"><use xlink:href="#hamburger"></use></svg>
        </a>
        <a href="/" class="header-logo">
            <img src="/img/trek-logo.svg" height="40px" alt="trek logo">
        </a>
        <a href="#" id="profile">
            <svg class="profile"><use xlink:href="#profile"></use></svg>
        </a>
        <div class="profile-menu">
            <ul>
                <li><a href="/account/users/index">My Questions</a></li>
                <li><a href="/trips/add">+ Add a Trip</a></li>
                <li><a href="/account/users/logout">Log Out</a></li>
            </ul>
        </div>
    </header>
    <div id="container" class="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
</body>
</html>
