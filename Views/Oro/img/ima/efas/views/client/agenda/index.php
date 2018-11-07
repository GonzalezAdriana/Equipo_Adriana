<?PHP
  require_once("../partialsclient/head.html");
  require_once("../..h-/calendario/agenda-views.html")
?>
<PHP


?>

<main>

<script type="text/javascript" src="../../../resources/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
       </script>

<!--v}
<a class="waves-effect waves-light btn btn_agregar_alumno " id="btn_modal_registro"><i class="material-icons left">add</i>AGREGAR PROYECTO</a>

<a class="waves-effect waves-light btn " id="btn_mos_alum"><i class="material-icons left">MORE</i>MOSTRAR PROYECTOS</a>
<a class="waves-effect waves-light btn " id="btn_eli_alum"><i class="material-icons left">HEALING</i>ELIMINAR PROYECTO</a>
<a class="waves-effect waves-light btn" id="btn_bus_alum"><i class="material-icons left">GPS_NOT_FIXED</i>BUSCAR PROYECTOS</a>
<a class="waves-effect waves-light btn " id="btn"><i class="material-icons left">BORDER_COLOR</i>MODIFICAR</a>
-->

 <!-- </div>
   <main class="mdl-layout__content">
        <div class="site-content">
          <div class="container"><div class="mdl-grid site-max-width">
  <div class="row">
    <div class="col l10 offset-l1" id="content_info_alumnos">
    <table class="striped responsive-table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th data-field="id">TRABAJADOR DE EFAS</th>
                    <th data-field="name">ACTIVIDAD</th>
                    <th data-field="price">OBJETIVO DE LA ACTIVIDAD</th>
                    <th data-field="price2">LUGAR DE LA ACTIVIDAD</th>
                    <th data-field="price3">FECHA</th>
                    <th data-field="price4">HORA</th>
                    <th data-field="price5">DURACION</th>
                    <th data-field="price6">TIPO DE ACTIVIDAD</th>
                    <th data-field="price7">OBSERVACIONES</th>
                    
                </tr>
              </thead>

              <tbody>
                <tr id="dat1" class="">
                <td class="id_per">1</td>
                  <td class="id_nom">Daniel Alexander</td>
                  <td class="id_ap">Visita</td>
                  <td class="id_price">visita </td>
                  <td class="">visita</td>
                  <th class="">visita</th>
                  <th class="">visita</th>
                  <th class="">visita</th>
                  <th class="">visita</th>
                  
                  <td><input type="button" class="btn mostrar info_hover" value="mostrar info" data-id="dat1"/></td>
                 



              </tbody>

    </table>
    </div>
    </div>
    </div>
    </div>

     </div>
    </div>
  
</main>
</main>

-->


<?PHP
  require_once("../partialsclient/footer.html");
?>