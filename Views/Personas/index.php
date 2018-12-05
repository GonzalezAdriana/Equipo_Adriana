<body id="LoginForm">
<div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Registrate</h2>
                <p>Coloca tus datos</p>
            </div>
            <form id="registrar" class="form-singin"  id="save_salida" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class=""nav-wrapper cyan lighten-2"">
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="ap_p" name="ap_p" placeholder="Apellido paterno" value="" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="ap_m" name="ap_m" placeholder="Apellido materno" value="" required>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" value="" required>
                </div>

                <select class="form-control" name="id_sexo" id="id_sexo">
                    <option value="">Selecciona Sexo</option>
                    <?php
                    if(isset($datos[1])){
                        while($fila = mysqli_fetch_assoc($datos[1])){ ?>
                            <option value=" <?php echo $fila['id_sexo'] ?>"> <?php echo $fila['descripcion'] ?> </option>
                        <?php }
                    }
                    ?>
                </select>

                <div>
                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nickname" value="">
                </div>

                <div>
                    <input type="password" class="form-control" id="pass"name="pass" placeholder="Constraseña" value="">
                </div>

                <select class="form-control" name="id_tipo_usuario" id="id_tipo_usuario">
                    <option value="">Selecciona Tipo Usuario</option>
                    <?php
                    if(isset($datos[2])){
                        while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                            <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                        <?php }
                    }
                    ?>
                </select>

                <br>
                <div class="container">
                    <a id="registrar" type="submit"  id="save_Salida_ok" class="btn btn-primary" href="">Completar registro</a>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        $("#save_Salida_ok").click(function(){
            $.post("<?php echo URL?>Usuarios/crear",$("#save_salida").serialize(),function(res){
                $('#save_salida').find('input, select, textarea').val('');

            })
        });
        $("#save_Salida_ok").click(function(){
            $.post("<?php echo URL?>Personas/crear",$("#save_salida").serialize(),function(res){
                $('#save_salida').find('input, select, textarea').val('');
            })
        });
    });
</script>