<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mi Grupo2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/micss.css">
	<link rel="stylesheet" href="css/visualizar_canchas.css">
	<script type="text/javascript" src="js/misGrupos2.js"></script>
</head>


<body>

<div class="container">
	<div class="row">
        <nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="misGrupos.html">Atras</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				   
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="php/cerrarsesion.php"><span class="glyphicon glyphicon-log-out"></span>   Cerrar Sesion</a></li>
				</ul>
				</div>
			</div>
		</nav>
	</div>


	
		<div class="row">

			<div class="panel panel-primary">
				<br>

					<div class="row">
				
					<div class="panel-heading">
					<div id="Dimg" class="col-sm-3 col-xs-6">
						
					</div>
					<div id="Dnom" class="col-sm-5 col-xs-6">
						
						<a data-toggle="modal" id="bus" value="<?php echo ($_GET["nameid"]);?>" data-target="#myModal">Administrar Grupo</a>
						<button id="saa">asdas</button>
					</div>
					<div id="Dbut" class="col-sm-4">
						<br>
					</div>
					</div>
					</div>

				

				<div class="panel-body">
				<div>
					<h2>Lista de Miembros</h2>
					
				</div>

				<div>
					<ul id="list" class="list-group">
						
					</ul>
				</div>
				</div>



			</div>
		</div>
	
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



</body>
</html>
