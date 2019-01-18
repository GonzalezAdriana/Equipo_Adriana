<?php
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
{
    echo "
		<div class='col-sm'>
			<div class='card' style='width: 18rem;'>"
    ?><img class='card-img-top' alt='Card image cap' style=' height:200px;' src=Public/img/admin.jpg><?php echo"
	            <div class='card-body'>
	              <h5 class='card-title'>{$row[1]}</h5>
	              <p class='card-text'>Apellido Paterno:     {$row[2]}</p>
		              <div>
		                <label for=''>Apellido Materno:        {$row[3]}</label>  
		              </div>
		              <div>
		                <label for=''>Usuario:      {$row[4]}</label>  
		              </div>
		              <div>
		                <label for=''>Edad:      {$row[5]}</label>  
		              </div>
		              <div>
		                <label for=''>Sexo:      {$row[6]}</label>  
		              </div>
		             <div class='btn-group'>
                          <button type='button' class='btn btn-default btn-lg' data-toggle='modal' id='cut'  data-id='{$row[0]}'style='background: whitesmoke'>
		             	    <span class='glyphicon glyphicon-remove'></span> 
                          </button>
                          <button type=\"button\" class=\"btn btn-default\"style='background: white' disabled='true'></button>
                          <button type=\"button\" class=\"btn btn-default\"style='background: white' disabled='true'></button>
                          <button type=\"button\" class=\"btn btn-default\"style='background: white' disabled='true'></button>
                          <button type=\"button\" class=\"btn btn-default\"style='background: white' disabled='true'></button>
                          <button type=\"button\" class=\"btn btn-default\"style='background: white' disabled='true'></button>
                          
                          	<button type='button' class='btn btn-default btn-lg' data-toggle='modal' id='out'  data-id='{$row[0]}'style='background: whitesmoke'>
		             	    <span class='glyphicon glyphicon-refresh'></span> 
                          </button> 
                    </div>		              		             
	            </div>
	         </div>
        </div>";
}

?>