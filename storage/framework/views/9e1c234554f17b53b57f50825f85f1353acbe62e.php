<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="language" content="fr"/>
        <meta name="author" content="Alpyildiz, Cem" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="SaveTheCode une plateforme de recrutement"/>
        <meta name="keywords" content="montpellier, ssii, société de service, développeur, cjd, geek, informatique, web, java, php, .net, c++, super dev"/>

        <title>Home | SaveTheCode</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body onload="majChrono();demarrerChrono()">
        <div class="container_time">
            <span class="time" id="minute">0 :</span>
            <span class="time" id="second">0</span>
        </div>
        <div class="text_opacity">
            <p>dr. asi mauve et son équipe d'ingénieurs ont participé à l'élaboration d'un robot intéligent : hale 9k</p>
        </div>
        <?php if(Route::has('login')): ?>   <!--- Verif si il y'a une route "login", voir dans /vendor/laravel/framework/src/Illuminate/Routing/Router.php !-->
            <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>" id="button_home">Retour exercice</a>
            <?php else: ?>
                <a href="<?php echo e(url('/register')); ?>" id="button_home">Relève le défi</a>
                <!--<a href="<?php echo e(url('/register')); ?>" id="button_home">Register</a>-->
            <?php endif; ?>

         <?php endif; ?>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
