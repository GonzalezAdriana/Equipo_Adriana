<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html >
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap-reboot.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.min.js"></script>

    </head>
        <main>

            <title>Turismo</title>
        <nav class=" bg-light navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
            <div class="container">
                <a   src="valle.jpg" width="20" height="20" class="navbar-brand js-scroll-trigger" href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger" id="sesion">EDOMEX</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#hace">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#info">Informes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contac">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        </main>
        <!------------------------------------------------------------>
        </html>
        <?php
    }
    public static function footer()
    {
        ?>
        <footer class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
                <div class="container">
                    <p class="text-left text-white">Copyright &copy; Derechos Reservados 2018</p>
                </div>
            </nav>
        </footer>
        </html>
<?php

}
}

