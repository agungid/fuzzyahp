<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title','Fuzzy AHP'); ?></title>

    <!-- Fonts -->
    <?php /* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> */ ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <script src="<?php echo e(asset('bootstrap/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/highcharts.js')); ?>"></script>

    <style>
        body {
            font-family: 'Lato';
            background-image: url(<?php echo asset('image/bg.jpg') ?>);
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    FuzzyAHP
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <?php if(!Auth::guest()): ?>
                        <li><a href="<?php echo e(route('data.index')); ?>">Kriteria</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Alternatif <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(route('harga.index')); ?>"><i class="fa fa-btn fa-money"></i>Harga</a></li>
                                <li><a href="<?php echo e(route('bbm.index')); ?>"><i class="fa fa-btn fa-beer"></i>BBM</a></li>
                                <li><a href="<?php echo e(route('warna.index')); ?>"><i class="fa fa-btn fa-cloud"></i>Warna</a></li>
                                <li><a href="<?php echo e(route('cc.index')); ?>"><i class="fa fa-btn fa-clock-o"></i>CC</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(route('hasil.index')); ?>">Hasil</a></li>
                    <?php endif; ?>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Masuk</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Daftar</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>
