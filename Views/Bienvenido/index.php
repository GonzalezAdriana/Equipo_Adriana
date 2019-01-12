<div class="container">
    <h2  align="center"  class="  text-danger" >CONTROL DE REGISTRO DE USUARIOS</h2>


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

<a href="<?php echo URL?>Personas/print_pdf" target="_blank" id="imprimir_pdf1"  class="center" ><i class="material-icons" type="button" class="btn btn-outline-primary"> PDF REGISTROS</i></a>

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