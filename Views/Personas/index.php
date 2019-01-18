
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id="ap_p " name="ap_p" class="form-control" placeholder="Apellido Paterno">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" id="ap_m" name="ap_m" class="form-control" placeholder="Apellido Materno">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad">
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


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="email" id="nickname" name="nickname" class="form-control" placeholder="Correo">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                        </div>
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña">
                    </div>

                    <select class="form-control" name="id_usuario" id="id_usuario">
                        <option value="">Selecciona</option>
                        <?php
                        if(isset($datos[2])){
                            while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                                <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                            <?php }
                        }
                        ?>
                    </select>


                    <div class="form-group">
                        <input   type="submit" value="Guardar"  class="btn float-right login_btn">
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
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">
            <div class="container">
                <div class="row" id="body_table">
                    <?php
                    require_once ("tabla.php");
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>



<div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="mimodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container justify-content-md-center col-md-12 order-md-1">
                    <form class="was-validated"  method="POST" action="<?php echo URL?>Personas/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="nombre"  name="nombre" class="form-control" placeholder="Nombre">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="ap_p " name="ap_p" class="form-control" placeholder="Apellido Paterno">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="ap_m" name="ap_m" class="form-control" placeholder="Apellido Materno">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad">
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
                        <select class="form-control" name="id_usuario" id="id_usuario">
                            <option value="">Selecciona</option>
                            <?php
                            if(isset($datos[2])){
                                while($fila = mysqli_fetch_assoc($datos[2])){ ?>
                                    <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
                                <?php }
                            }
                            ?>
                        </select>
                </div>

                <div class="modal-footer">
                    <button  class="btn btn-primary " id="enviar" type="submit">Actualizar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="mimodaleliminar" tabindex="-1" role="dialog" aria-labelledby="mimodaleliminar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esta seguro de eliminar el registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button"  id="eliminar_ok" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#body_table").on("click","button#out",function(){
            var id=$(this).data("id");
            $.get("<?php echo URL?>Personas/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#id").val(datos["id_persona"]);
                $("#nombre").val(datos["nombre"]);
                $("#ap_p").val(datos["ap_p"]);
                $("#ap_m").val(datos["ap_m"]);
                $("#id_usuario").val(datos["id_usuario"]);
                $("#edad").val(datos["edad"]);
                $("#id_sexo").val(datos["id_sexo"]);
            });

            $("#mimodal").modal("show");
        });
        $("#body_table").on("click","button#cut",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>Personas/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#mimodaleliminar").modal("show");
        });
        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table").empty().append(res);
            });
        });
    })
</script>
