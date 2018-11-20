
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Control de pluma</h2>
                <p>Coloca tus datos</p>
            </div>
            <form id="registro" class="form-singin" action="<?php echo URL ?>login/guardar" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class=""nav-wrapper cyan lighten-2"">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ap_p" placeholder="Apellido paterno" value="" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ap_m" placeholder="Apellido materno" value="" required>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="edad" placeholder="Edad" value="" required>
                    </div>

                    <select class="form-control" name="id_sexo">
                        <option value="">Selecciona Sexo</option>
                        <?php
                        if(isset($datos[0])){
                            while($fila = mysqli_fetch_assoc($datos[0])){ ?>
                                <option value="<?php echo $fila['id_sexo'] ?>"><?php echo $fila['descripcion'] ?></option>
                            <?php }
                        }
                        ?>
                    </select>

                    <div>
                        <input type="text" class="form-control" id="nickname" placeholder="Codigo placa" value="">
                    </div>



                    <select class="form-control" name="id_tipo_usuario">
                        <option value="">Selecciona Tipo Usuario</option>
                        <?php
                        if(isset($datos[1])){
                            while($fila = mysqli_fetch_assoc($datos[1])){ ?>
                                <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                            <?php }
                        }
                        ?>
                    </select>

                    <br>
                    <div class="container">
                        <a id="registrar"   href="<?php echo URL?>Valle" type="submit" class="btn btn-primary"  >Registrar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
