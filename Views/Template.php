<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta charset="utf-8">
            <title>Valle de Bravo-Pueblo Mágico</title>

            <link type="text/css" href="<?php echo URL ?>Public/css/login.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/style3.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/bootstrap.min.css" >
            <link rel="stylesheet" href="<?php echo URL ?>Public/css/sweet-alert.min.css">

            <link type="text/css" href="<?php echo URL ?>Public/css/glyphicons.css" rel="stylesheet">
            <script type="text/javascript" src="<?php echo URL ?>Public/js/sweet-alert.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/highcharts.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/jquery.validate.min.js"></script>
        </head>

        <body>
        <main>
            <title>EDOMEX</title>
            <nav class=" bg navbar navbar-expand-lg navbar-light bg-dark fixed-top text-white"  >
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger text-white" href="<?php echo URL?>inicio" class="btn btn-primary js-scroll-trigger " id="sesion ">EDOMEX</a>


                    <div class="collapse navbar-collapse " id="navbarResponsive"><ul class="navbar-nav ml-auto">

                            <a class="navbar-brand js-scroll-trigger text-white" href="<?php echo URL?>Quienes_somos" class="btn btn-primary js-scroll-trigger " id="sesion ">Quienes somos </a>


                            <a class="navbar-brand js-scroll-trigger text-white" href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger " id="sesion ">Iniciar sesion</a>

                        </ul>
                    </div>
                </div>
            </nav>
        </main>

        </html>
        
        <?php
    }
    public function footer(){
        ?>
        <footer class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
                <div class="container">

                    <p class="  text-white ">Todos los derechos reservados TESVB 2018</p>

                </div>
            </nav>

        </footer>


        </body>
        <?php

}
}

