<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="language" content="fr"/>
        <meta name="author" content="Alpyildiz, Cem" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="SaveTheCode une plateforme de recrutement"/>
        <meta name="keywords" content="montpellier, ssii, société de service, développeur, cjd, geek, informatique, web, java, php, .net, c++, super dev"/>

        <title>Lose | SaveTheCode</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style_lose.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="img/robot.png" id="robot" alt="root"/>
                </div>
                <div class="col-md-10">
                    <h1 id="title_lose">Server not found</h1>
                    <hr>
                     <?php if(Auth::check()): ?>
                    <p><?php echo e(Auth::user()->name); ?> Ton code a fait crashé les internets, tu vas devoir y passer ton weekend.</br>
                    Invite tes amis à participer pour rétablir la connexion</p>
                    <div id="social_network">
                        <a href="https://www.facebook.com/believeitmontpellier/" target="_blank" class="facebook"><img src="img/facebook.png" class="social_logo" />Share on Facebook</a>
                        <a href="https://www.linkedin.com/company-beta/11018149/" target="_blank"><img src="img/linkedin.png" class="social_logo"/>Share on Linkedin</a>
                    </div>
                    <a href="<?php echo e(url('/home')); ?>" class="button_home">Return exercice</a>

                    <?php else: ?> 
                    <p>Ton code a fait crashé les internets, tu vas devoir y passer ton weekend.</br>
                    Invite tes amis à participer pour rétablir la connexion</p>
                    <div id="social_network">
                        <a href="https://www.facebook.com/believeitmontpellier/" target="_blank" class="facebook"><img src="img/facebook.png" class="social_logo" />Share on Facebook</a>
                        <a href="https://www.linkedin.com/company-beta/11018149/" target="_blank"><img src="img/linkedin.png" class="social_logo"/>Share on Linkedin</a>
                    </div>
                    <a href="<?php echo e(url('/')); ?>" class="button_home">Return home</a>

                    <?php endif; ?>

                </div>
            </div>
        </div>
       
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
