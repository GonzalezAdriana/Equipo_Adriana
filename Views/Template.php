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
          <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top align-content-center" >
                   
                    <a href="<?php echo URL?>inicio"><img src="<?php echo URL?>Public/img/logo.jpg" width="110" heigh="10"></a>


                    <div class="collapse navbar-collapse " id="navbarResponsive"><ul class="navbar-nav ml-auto">

                            
                             <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL?>Quienes_somos">
                                    <img src="<?php echo URL?>Public/img/quien1.png" alt="ok" width="130" heigh="40" class="img-raised  img-fluid">
                                </a>
                            </li>
                            </ul>

                             <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL?>login">
                                    <img src="<?php echo URL?>Public/imagenes/user.png" alt="ok" width="40" heigh="40" class="img-raised  img-fluid">
                                </a>
                            </li>
                            </ul>


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
        
         

                            <footer class="py-3 bg-dark">

                              <!-- Copyright -->
                              <div class="footer-copyright text-center text-white py-3">© 2018 Copyright: Todos los derechos reservados TESVB
                              </div>
                              <!-- Copyright -->

                            </footer>


        </body>
        <?php

}
}

