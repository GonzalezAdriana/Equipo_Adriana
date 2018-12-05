<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
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
            <div class="card-header">
                <h2>Registrate</h2>
                <p>Coloca tus datos</p>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <div class="panel">

                </div>
                <form class="needs-validation"   method="POST" action="<?php echo URL?>Personas/crear"  novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id="nombre"  name="nombre" class="form-control" placeholder="Nombre">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" id="ap_p " name="ap_p" class="form-control" placeholder="Apellido">
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

                    <select class="form-control" name="id_usuario" id="id_usuario">
                        <option value="">Selecciona Tipo Usuario</option>
                        <?php
                        if(isset($datos[2])){
                            while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                                <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                            <?php }
                        }
                        ?>
                    </select>


                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn float-right login_btn">
                    </div>
            </div>
            </form>
            <br>
            </div>
        <br>

        </div><br>
    </div><br>
</div><br>
</body>
</html>