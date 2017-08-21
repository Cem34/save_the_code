<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">

</head>
<body onload="majChrono();demarrerChrono()">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="<?php echo e(url('/')); ?>"><img src="img/logo_save.png" alt="logo" id="logo"/></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="login_register">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li class="log_reg"><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li class="log_reg"><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown user_name">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu deco" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
        </nav>
        <div class="container_time">
            <span class="time" id="minute">0 :</span>
            <span class="time" id="second">0</span>
        </div>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>
