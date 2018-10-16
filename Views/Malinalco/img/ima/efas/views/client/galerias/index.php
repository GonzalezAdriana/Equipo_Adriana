

<?PHP
  require_once("../partialsclient/head.html");
?>

<main>

<script type="text/javascript" src="../../../resources/js/materialize.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider();
      $("nav ul li").removeClass('active');
      $("#btn_menu_home").addClass('active'); 
    });

</script>

<!--<div class="container">
<div class="container">
<div  class="row">
  <h1>Galeria</h1>
  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/1.jpg" class="responsive-img materialboxed" data-campion="ESTE ES UN RECORRIDO">
  </div>
  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/2.jpg" class="responsive-img materialboxed" data-campion="ESTE ES OTRO RECORRIDO ">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/3.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/4.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/5.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/6.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/8.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/8.jpg" class="responsive-img materialboxed">
  </div>

  <div class="col s4">
    <img src="../../../resources/img/RECORRIDO/9.jpg" class="responsive-img materialboxed">
  </div>


</div>

</div>

  </div>-->
<div class="slider  ">
    <ul class="slides">
      <li>
        <img src="../../../resources/img/RECORRIDO/1.jpg" class="responsive-img materialboxed">  random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/2.jpg" class="responsive-img materialboxed">  random image 
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3" >Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/3.jpg" class="responsive-img materialboxed"> random image 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3 " >Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/4.jpg" class="responsive-img materialboxed"> < random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/5.jpg" class="responsive-img materialboxed">  random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/6.jpg" class="responsive-img materialboxed">  random image 
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/7.jpg" class="responsive-img materialboxed">  random image 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3" >Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../../../resources/img/RECORRIDO/8.jpg" >  random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>

    </ul>
  </div>



</main>
<?PHP
  require_once("../partialsclient/footer.html");
?>