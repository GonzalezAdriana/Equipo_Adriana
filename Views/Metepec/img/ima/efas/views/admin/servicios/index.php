<?PHP
  require_once("../partialsclient/head.html");
?>





<script type="text/javascript" src="../../../resources/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('select').material_select(); 

  });
       </script>

<!--v}
<a class="waves-effect waves-light btn btn_agregar_alumno " id="btn_modal_registro"><i class="material-icons left">add</i>AGREGAR PROYECTO</a>

<a class="waves-effect waves-light btn " id="btn_mos_alum"><i class="material-icons left">MORE</i>MOSTRAR PROYECTOS</a>
<a class="waves-effect waves-light btn " id="btn_eli_alum"><i class="material-icons left">HEALING</i>ELIMINAR PROYECTO</a>
<a class="waves-effect waves-light btn" id="btn_bus_alum"><i class="material-icons left">GPS_NOT_FIXED</i>BUSCAR PROYECTOS</a>
<a class="waves-effect waves-light btn " id="btn"><i class="material-icons left">BORDER_COLOR</i>MODIFICAR</a>
-->
  <div class="row right center" >
    <div class="col l10 offset-l1 ">
      <div class="row">


            <div class="col l3">
              <a href="#!" class="btn  btn_agregar_proyecto " id="btn_modal_registro">
               <i class="material-icons  "></i>AGREGAR PROYECTO</a>
            </div>
            <div class="col l3">
                <a href="#!" class="btn btn_mos_proyecto" id="btn_mos_alum">
                <i class="material-icons "></i>MOSTRAR PROYECTOS</a>
            </div>
         
            <div class="col l3">
                <a href="#!" class="btn" id="btn_bus_proyecto">
                <i class="material-icons "></i>BUSCAR PROYECTO</a>
            </div>
            <div class="col l3">
                <a href="#!" class="btn" id="btn_modi_proyecto">
                <i class="material-icons"></i>MODIFICAR PROYECTO</a>
            </div>
        </div>
      </div>
    </div>
  </div>
   <main class="mdl-layout__content">
        <div class="site-content">
          <div class="container"><div class="mdl-grid site-max-width">
  <div class="row">
    <div class="col l10 offset-l1" id="content_info_proyecto">
    <table class="striped responsive-table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th data-field="id">Nonbre del Cliente</th>
                    <th data-field="name">Nombre de la Empresa</th>
                    <th data-field="price">Objetivo Principal del Proyecto</th>
                    <th data-field="price">Resumen del Proyecto</th>
                    <th data-field="price">Email</th>
                    <th data-field="price">Telefono</th>
                    <th data-field="price">Direccion</th>
                    <th data-field="price">Proteccion de Flore y fauna</th>
                    <th data-field="">Acciones</th>
                    <th  data-field="">Acciones</th>>
                </tr>
              </thead>

              <tbody>
                <tr id="dat1" class="">
                <td class="id_per">1</td>
                  <td class="id_nom">Daniel Alexander</td>
                  <td class="id_ap">Proteccion al lobo</td>
                  <td class="id_price">Protejer a los lobos</td>
                  <td class="">El lobo de Monte esta el peligro de extincion</td>
                  <th class="">Dentro de este habita</th>
                  <th class="">lobo@gmail.com</th>
                  <th class="">72727272</th>
                  <th class="">San francisco de las casas</th>
                  <th class="">Fauna</th>
                  <td><input type="button" class="btn mostrar info_hover" value="mostrar info" data-id="dat1"/></td>
                   <td><input type="button" id="btn_eli_alum" class="btn mostrar info_hover" value="ELIMINAR" data-id="Eliminar"/></td>
                </tr>
                 <tr id="dat1" class="">
                <td class="id_per">1</td>
                  <td class="id_nom">Daniel Alexander</td>
                  <td class="id_ap">Proteccion al lobo</td>
                  <td class="id_price">Protejer a los lobos</td>
                  <td class="">El lobo de Monte esta el peligro de extincion</td>
                  <th class="">Dentro de este habita</th>
                  <th class="">lobo@gmail.com</th>
                  <th class="">72727272</th>
                  <th class="">San francisco de las casas</th>
                  <th class="">Fauna</th>
                  <td><input type="button" class="btn mostrar info_hover" value="mostrar info" data-id="dat1"/></td>
                   <td><input type="button" id="btn_eli_alum" class="btn mostrar info_hover" value="ELIMINAR" data-id="Eliminar"/></td>
                </tr>

                 <tr id="dat1" class="">
                <td class="id_per">1</td>
                  <td class="id_nom">Daniel Alexander</td>
                  <td class="id_ap">Proteccion al lobo</td>
                  <td class="id_price">Protejer a los lobos</td>
                  <td class="">El lobo de Monte esta el peligro de extincion</td>
                  <th class="">Dentro de este habita</th>
                  <th class="">lobo@gmail.com</th>
                  <th class="">72727272</th>
                  <th class="">San francisco de las casas</th>
                  <th class="">Fauna</th>
                  <td><input type="button" class="btn mostrar info_hover" value="mostrar info" data-id="dat1"/></td>
                   <td><input type="button" id="btn_eli_alum" class="btn mostrar info_hover" value="ELIMINAR" data-id="Eliminar"/></td>
                </tr>
               <tr id="dat1" class="">
                <td class="id_per">1</td>
                  <td class="id_nom">Daniel Alexander</td>
                  <td class="id_ap">Proteccion al lobo</td>
                  <td class="id_price">Protejer a los lobos</td>
                  <td class="">El lobo de Monte esta el peligro de extincion</td>
                  <th class="">Dentro de este habita</th>
                  <th class="">lobo@gmail.com</th>
                  <th class="">72727272</th>
                  <th class="">San francisco de las casas</th>
                  <th class="">Fauna</th>
                  <td><input type="button" class="btn mostrar info_hover" value="mostrar info" data-id="dat1"/></td>
                   <td><input type="button" id="btn_eli_alum" class="btn mostrar info_hover" value="ELIMINAR" data-id="Eliminar"/></td>
                </tr>
                
              </tbody>

    </table>
    </div>
    </div>
    </div>
    </div>

     </div>
    </div>
 
   <div class="modal-footer">

       <a href="#" class="btn-flat waves-effect waves light btn " id="acep_registro_proyecto">Aceptar</a>
   
   </div> 



    <div class="modal" id="agregar_proyecto">
          <div class="modal-content">
            <h4>Agregar Proyecto</h4>
            <div class="container row">
              <form id="form_registro">
                <div class="input-field col l6 m12 s12">
                <input type="text" id="nombre_cliente" name="nombre_cliente" data-error=".errorcliente">
                  <label for="nombre_cliente">Nombre del Cliente</label>
                  <div class="errornombrealumno red-text"></div>
                </div>
                  <div class="input-field col l6 m12 s12">
                       <input type="text" id="nombre_proyecto" name="nombre_proyecto" data-error=".errorproyecto">
                       <label for="nombre_proyecto">Nombre del Proyecto</label>
                       <div class="errorproyecto red-text"></div>
                  </div>
                  <div class="input-field col l6 m12 s12">
                    
                        <input type="text" id="objetivo_proyecto" name="objetivo_proyecto" data-error=".errorproyecto">
                        <label for="objetivo_proyecto">Objetivo Principal del Proyecto</label>
                        <div class="errorobjetivo red-text"></div>
                  </div>
                  <div class="input-field col l6 m12 s12">
                    <input type="text" id="resumen_proyecto" name="resumen_proyecto" data-error=".eliminar-errorresumen">
                    <label for="resumen_proyecto">Resumen del Proyecto</label>
                    <div class="eliminar-errorresumen red-text"></div>
                </div>

                <div class="input-field col l6 m12 s12">
                    <input type="text" id="descripcion_proyecto" name="descripcion_proyecto" data-error=".eliminar-errorresumen">
                    <label for="descripcion_proyecto">Descripcion del Proyecto</label>
                    <div class="eliminar-errorresumen red-text"></div>
                </div>
                <div>


                 <div class="input-field col l6 m12 s12">
                  <select name="tipo_proyecto" id="tipo_proyecto" data-error=".errorsemestre">
                  <option value="" disabled selected>Elige el Tipo de Proyecto</option>
                  <option value="1">Estudios para aprovechamiento forestal </option>
                  <option value="2">Estudio para el  cambio de uso de suelo para minas casas u otro</option>
                  <option value="3">Estudio Tecnico Unificado para minas cosas u otro</option>
                  <option value="4">informe preventivo aprovechamiento, tierra de monte, vara de perlilla, ara blanca o musgo</option>
                  <option value="5">Unidad de manejo para la conservacion de la vida silvestre</option>
                  <option value="6">Estudio de Daños</option>
                  <option value="7">Apoyo ante sanciones o requerimeintos ambientales</option>
                  <option value="8">Proyectos Forestales</option>
                  <option value="9">Noveno</option>
                  </select>   
                  
                  <div class="errortipoproyecto red-text"></div>
                  </div>


            </div>
               <div class="input-field col l6 m12 s12">
                    <input type="text" id="direccion" name="direccion" data-error=".eliminar-direccion">
                    <label for="direccion">Direccion</label>
                    <div class="eliminar-errordireccion red-text"></div>
                </div>
                 <div class="input-field col l6 m12 s12">
                    <input type="text" id="telefono" name="telefono" data-error=".eliminar-errortelefono">
                    <label for="telefono">Telefono</label>
                    <div class="eliminar-errortelefono red-text"></div>
                </div>
                <div class="input-field col l6 m12 s12">
                    <input type="text" id="correo" name="correo" data-error=".eliminar-errorcorreo">
                    <label for="correo">Correo Electronico</label>
                    <div class="eliminar-errorcorreo red-text"></div>
                </div>
               



          </div>
        </form>
        </div>
          <div class="modal-footer">
            <a href="#" class="btn-flat waves-effect waves light btn " id="acep_registro_proyecto">Aceptar</a>
            <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
          </div> 
    </div>
  <br>
</div>

    <div class="modal modal_grande" id="modal_mostrar_info">
    <div class="modal_content">
      <h4 id="titlemodal"></h4>
      <div class="container row">

      </div>
      </div>
      <div class="modal-footer">
          <a href="#" class="btn-flat waves-effect waves-light btn modal-close">Cerrar</a>
        
      </div>
    </div>


    <div class="modal" id="eliminar_alumno">
          <div class="modal-content">
            <h4>Eliminar Proyecto</h4>
            <div class="container row">
              <form id="form_eliminar">
                <div class="input-field col l6 m12 s12">
                    <input type="text" id="numero_cuenta" name="numero_cuenta" data-error=".eliminar-erroralumno">
                    <label for="numero_cuenta">Numero de  Proyecto</label>
                    <div class="eliminar-erroralumno red-text"></div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn-flat waves-effect waves light btn " id="eli_registro_alumno">Eliminar</a>
            <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
          </div> 
    </div>

    <div class="modal" id="buscar_alumno">
          <div class="modal-content">
            <h4>Buscar Proyecto</h4>
            <div class="container row">
              <form id="form_buscar">
                <div class="input-field col l6 m12 s12">
                    <input type="text" id="numero_cuenta" name="numero_cuenta" data-error=".buscar-erroralumno">
                    <label for="numero_cuenta">No. de Registro del Proyecto</label>
                    <div class="buscar-erroralumno red-text"></div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn-flat waves-effect waves light btn " id="bus_registro_alumno">Buscar</a>
            <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
          </div> 
    </div>


        <div class="modal" id="modificar_proyecto">
          <div class="modal-content">
            <h4>Modificar Proyecto</h4>
            <div class="container row">
              <form id="form_modificar">
                <div class="input-field col l6 m12 s12">
                <input type="text" id="nombre_alumno" name="nombre_alumno" data-error=".errornombrealumno">
                  <label for="nombre_alumno">Nombre del Cliente</label>
                  <div class="errornombrealumno red-text"></div>
                </div>
                  <div class="input-field col l6 m12 s12">
                       <input type="text" id="apaternoalumno" name="apaternoalumno" data-error=".errorapaterno">
                       <label for="apaternoalumno">Nombre del Proyecto</label>
                       <div class="errorapaterno red-text"></div>
                  </div>
                  <div class="input-field col l6 m12 s12">
                    
                        <input type="text" id="amaternoalumno" name="amaternoalumno" data-error=".erroramaterno">
                        <label for="amaternoalumno">Objetivo Principal del  Proyecto</label>
                        <div class="erroramaterno red-text"></div>
                  </div>
              
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn-flat waves-effect waves light btn " id="modi_registro_alumno">Aceptar</a>
            <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
          </div> 
        </div>
      
 
 <div style="display:none" id="cont_request"></div>   

</main>


  <script type="text/javascript">
    $(document).ready(function(){
      $("nav ul li").removeClass('active');
      $("#btn_menu_servicios").addClass('active');
      $(".btn_agregar_proyecto").click(function(event){
        $("#agregar_proyecto").openModal();
      });

        $("#btn_eli_proyecto").click(function(event){
        $("#eliminar_proyecto").openModal();
      });

        $("#btn_bus_proyecto").click(function(event){
        $("#buscar_proyecto").openModal();
      });

        $("#btn_modi_proyecto").click(function(event){
        $("#modificar_proyecto").openModal();
      });

      $("#acep_registro_proyecto").click(function(event){
        $("#form_proyecto").submit();
      
          
      });

      $("#eli_registro_proyecto").click(function(event){
        $("#form_eliminar").submit();
      });

      $("#bus_registro_proyecto").click(function(event){
        $("#form_buscar").submit();
      });

      $("#modi_registro_proyecto").click(function(event){
        $("#form_modificar").submit();
      });

  </script>
</main>
<?PHP 
  require_once("../partialsclient/footer.html");
?>