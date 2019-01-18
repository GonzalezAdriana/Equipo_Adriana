<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07/01/2019
 * Time: 07:29 PM
 */
?>
<script type="text/javascript">
    window.location.href = "<?php echo URL?>login";
</script>
<script type="text/javascript">
    swal({
            title: "Cerrar sesión",
            text: "¿Deseas salir de tu sesión?",
            type: "info",

            showCancelButton: true,
            confirmButtonClass: "btn-succes",
            cancelButtonClass: "btn-danger",

            confirmButtonText: "Si, Salir",
            cancelButtonText: "No, Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm)
        {
            if (isConfirm) {
                swal("Saliendo", "Hasta la próxima", "info");
                setTimeout(function(){
                    window.location.href = "<?php echo URL?>login";
                },1500)
            }
            else {
                swal("Cancelando", "error",);
                setTimeout(function(){
                    window.location.href = "<?php echo URL?>bienvenido";
                },1500)
            }
        });
</script>
