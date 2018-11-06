<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">

        <div class="card">
            <div class="card-header"

        <div class="card-1">
            <div class="card-header">
                <h3>Inicio de Secion</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form id="regusr" class="form-signin" action="<?php echo URL ?>login/guardar" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellido Paterno" id="ap_p">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellido Materno" id="ap_m">
                    </div>  <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="Edad" id="edad">
                    </div>  <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <label for="id_sexo"></label>
                        <select class="form-control" name="id_sexo">
                            <option value="">Selecciona...</option>
                            <?php
                            if(isset($datos[0])){
                                while($fila = mysqli_fetch_assoc($datos[0])){ ?>
                                    <option value="<?php echo $fila['id_sexo'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php }
                            }
                            ?>
                        </select>

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nickname" id="nickname">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" id="contraseña">
                    </div>


                    <label for="id_sexo"></label>
                    <select class="form-control" name="id_tipousuario">
                        <select class="form-control" name="id_tipo_usuario">
                            <option value="">Selecciona...</option>
                            <?php
                            if(isset($datos[1])){
                                while($fila = mysqli_fetch_assoc($datos[1])){ ?>
                                    <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php }
                            }
                            ?>
                    </select>
            </div>

            <div class="form-group">
                <button type="submit"  class="btn float-right login_btn">Guardar</button>

            </div>
            </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
</body>
</html>

<br><br><br><br>
<script type="text/javascript">
    $("#regusr").validate({
        errorPlacement: function(error, element) {
            // Append error within linked label
            $( element )
                .closest( "form" )
                .find( "label[for='" + element.attr( "id" ) + "']" )
                .after( error );
        },
        errorElement: "h1",
        messages: {
            nombre: {
                required: "Escribe un nickname valido"
            },
            ap_p: {
                required: "Escribe un apellido valido"
            },
            ap_m: {
                required: " Campo requerido"
            }
        }
    });
</script>
