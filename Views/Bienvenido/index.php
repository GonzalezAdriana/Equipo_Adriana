<div class="container">
  
    <br>
    <h2> ....</h2>
    <br>
    <h2  align="center"  class="  text-danger" >CONTROL DE REGISTRO DE USUARIOS</h2>

    <div class="btn-group" aling="center">
        <a href="<?php echo URL?>Personas/print_pdf" target="_blank" id="imprimir_pdf1" class="btn btn-default" >PDF REGISTROS</a>
        <a type="button" data-toggle="modal" data-target="#miModal" class="btn btn-default" >Abrir modal</a>
        <a href="<?php echo URL?>bienvenido/logout" id="cerrar" class="btn btn-default">Cerrar sesión</a>

    </div><br>


                   -<?php

                echo "Administrador: " . $_SESSION['nickname'];
                ?>

<br>
<?php
                echo "Hoy es dia: ".date_default_timezone_set("america/mexico_city");  echo date('Y-m-d');
                ?>
                    <br>
                <?php
                echo "La hora es: ".date('H:i:s', time());
                echo "<br><hr><br>";
                ?>


<p class="card-text">El control de accesos es una poderosa arma de seguridad, pero no es su única ventaja. En espacios donde el paso de personas debe estar limitado, sirve de barrera para evitar accesos no autorizados.

Permite, además, controlar horarios y fechas por ello es recomedable el chequeo de registros e impreción de los mismos en caso de ser necesario.</p>

		<div class="row">

 				<div class="col-md-6">
                        <img class="card-img-top" src="Public/img/lol.jpg" alt="Card image cap"width="250" height="280">
                        <div class="card-body">
                            <h5 align="center" class="card-title border-bottom pb-3">SEGURIDAD<a></a></h5>
                        </div>                
                </div>

				<div class="col-md-6">
                        <img class="card-img-top" src="Public/img/lol2.jpg" alt="Card image cap"width="250" height="280">
                        <div class="card-body">
                            <h5 align="center" class="card-title border-bottom pb-3">CONTROL<a></a></h5>
                        </div>                
                </div>


         </div>

</div>

<div  class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
            </div>
            <div class="modal-body">
                Texto del modal
            </div>
        </div>
    </div>
</div>



