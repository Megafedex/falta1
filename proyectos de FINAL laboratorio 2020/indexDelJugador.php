<!DOCTYPE html>
<html lang="en">
	<?php
  		require_once("php/verificarSesion.php");
 	?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="lib/bootstrap3.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="lib/fullcalendar.css">
		<script src="lib/jquery3.js"></script>
		<script src="lib/bootstrap3.js"></script>
		<script src="lib/moment.js"></script>
        <script src="lib/fullcalendar.js"></script>
		<script src="lib/es.js"></script>
		<script src="js/organizarpartido.js"></script>
		<script src="js/unirseapartido.js"></script>
		<script src="js/enviarInvitacion.js"></script>
		<script src="js/cuandojuego.js"></script>
		<script src="js/hoyjuego.js"></script>
		<script src="js/traerinvitaciondepartido.js"></script>
		<title>Jugador</title>
	</head>
	<body>
		<div id="contenedor_carga_jugador">
			<div id="carga_jugador"></div>
		</div>
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
				      <a class="navbar-brand" href="#">falta1.com</a>
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
					<div class="panel-heading">
						<h4>Jugador <?php echo $_SESSION["NOMBRE"];?> Elegi la opcion que vos quieras:</h4>
					</div>
					<div class="panel-body">
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#UnirseAPartido" id="btnUnirseAPartido">Unirse a Partido</button>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#organizarPartido">Organizar Partido</button>
						<button type="button" class="btn btn-default" id="cuandoJuego">Cuando Juego</button>
						<a href="misGrupos.php"><button type="button" class="btn btn-default">Mis Grupos</button></a>
						<button type="button" class="btn btn-default"  id="cantInvitaciones">Mis invitaciones</button>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Mira <?php echo $_SESSION["NOMBRE"];?> estos son tus partidos organizados:</h4>
					</div>
					<div class="panel-body" >
						<div class="table-responsive">          
							  <table class="table">
							    <thead>
							      <tr>
							        <th>Fecha</th>
							        <th>Hora de inicio</th>
							        <th>Hora de fin</th>
							        <th>Tipo de Futbol</th>
							        <th>Cantidad de jugadores confirmados</th>
							        <th>Que hago?</th>
							      </tr>
							    </thead>
							    <tbody id="misPartidos" >
							    	<tr>
							    		
							    	</tr>
							      
							    </tbody>
							  </table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="organizarPartido" role="dialog">
			    <div class="modal-dialog">


			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Organiza un Partido</h4>
			        </div>
			        <div class="modal-body">
			          <div class="panel panel-default">
	                        <div class="panel-body">
	                        	<form action="#" method="POST" id="formOrganizarPartido">
										<h4> <label for="CalendarioWeb" class="label label-info">Selecciona el Dia:</label></h4>

										<div id="CalendarioWeb"></div>
										<p class="class bg-danger" id="errorDeFechaseleccionada"></p>
										<div class="form-group">
	                                    	<h4>
	                                    		<label for="tipoFutbol" class="label label-info">
	                                    	Selecciona el tipo de Futbol:</label>
	                                    	</h4>
	                                    	<select class="form-control" id="tipoFutbol">

											</select>
											<a href="#" data-toggle="tooltip" title="La duracion del partido depende del tipo de futbol seleccionado">info</a>
	                                	</div>
	                                	<p class="bg-danger oculto" id="errorDeFutbolseleccionado"></p>
	                                	<div class="form-group">
	                                    	<h4><label for="horaInicioPartidoOrganizado" class="label label-info">Selecciona la hora de inicio:</label></h4>
	                                    	<input type="time" class="form-control" id="horaInicioPartidoOrganizado" name="horaInicioPartidoOrganizado" required>
	                                	</div>
	                                	<p class="bg-danger oculto" id="errorDeHoraseleccionada"></p>
	          
	                                	<button type="submit" class="btn btn-success" id="btnRegistrarPartido" value="<?php echo($_SESSION['ID_USUARIO']) ?>">Registrar Partido</button>
								</form>
	                        </div>
                    	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>

			    </div>
  			</div>

  			<div class="modal fade" id="MRegistroCorrectoPartido" role="dialog">
			    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Registro Correcto del Partido</h4>
				        </div>
				        <div class="modal-body">

		                        <h4>El Partido fue Guardado Correctamente</h4>

				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        </div>
				      </div>

			    </div>
  			</div>

  			<div class="modal fade" id="MReservarCancha" role="dialog">
			    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Busca tu cancha para reservar</h4>
				        </div>
				        <div class="modal-body">					
							<div class="panel panel-default">
				    			<div class="panel-body">
						    		<div class="row">
										<div class="col-xs-4">
											<input class="form-control order-select form-control-lg" placeholder="Buscar Cancha..." name="title" type="text" id="canchaABuscar" >
											<p class="bg-danger oculto" id="errorDeBusquedaCancha"></p>
										</div>
										<div class="col-xs-2">
											<div class="dropdown">
											  	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  id="btnDropDownsBuscar" value="1">Localidad
											  	<span class="caret"></span></button>
											  	<ul class="dropdown-menu">
											    	<li value="1"><a href="#canchaABuscar" id="busquedaLocalidad">Localidad</a></li>
											    	<li value="2"><a href="#canchaABuscar" id="busquedaBarrio">Barrio</li>
											    	<li value="3"><a href="#canchaABuscar" id="busquedaDireccion">Direccion</a></li>
											  	</ul>
											</div>

										</div>
										<div class="col-xs-2">
											<button type="button" class="btn btn-success" id="btnBuscar">
							      				<span class="glyphicon glyphicon-search"></span> Buscar
							    			</button>
										</div>
									</div><br>

				    			</div>
				    			<div class="panel-body" id="canchasBuscadaDisponibles">
				   
				    			</div>
				  			</div>
				        </div>
				        <div class="modal-footer">
				          
				        </div>
				      </div>

			    </div>
  			</div>

  			<div id="modalMasInfoCancha" class="modal fade" role="dialog">
			  <div class="modal-dialog">


			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Informacion completa de la Cancha</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row" id="contenedorcarrusel">

			        </div>
			        <div class="row">
			        	<ul class="list-group">
						  <li class="list-group-item" id="liProvincia"></li>
						  <li class="list-group-item" id="liLocalidad"></li>
						  <li class="list-group-item" id="liBarrio"></li>
						  <li class="list-group-item" id="liDireccion"></li>
						  <li class="list-group-item" id="liTipoFutbol"></li>
						  <li class="list-group-item" id="liPrecio"></li>
						  <li class="list-group-item" id="liTelefono"></li>


						</ul>
				    </div>
				    <button type="button" class="btn btn-success">Reservar Esta Cancha</button>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>

			  </div>
			</div>


  			<div class="modal fade" id="MAquienVasAInvitar" role="dialog">
			    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Elegi a quien vas a enviar la invitacion</h4>
				        </div>
				        <div class="modal-body">
				        	<button type="button" class="btn btn-info" id="seleccionoAmigo" value="<?php echo $_SESSION["NOMBRE"];?>">A un amigo</button>
				        	<button type="button" class="btn btn-info" id="seleccionoGrupo" value="<?php echo $_SESSION["NOMBRE"];?>">A grupo</button>		                        
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        </div>
				      </div>

			    </div>
  			</div>
  			<div class="modal fade" id="MenviarAAmigo" role="dialog">
			    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Ingresa el mail de tu amigo</h4>
				        </div>
				        <div class="modal-body">
				        	<form action="#" method="POST" id="formInvitacionAAmigo">
	                               		<div class="form-group">
	                                    	<label for="emaideamigo" >Ingresa el email de tu amigo:</label>
	                                    	<input type="email" class="form-control" id="emaideamigo"  required>
	                                	</div>
	                                	<div class="form-group">
	                                    	<label for="districtoBarrio" >Ingresa la localidad y el barrio donde se va a jugar el partido:</label>
	                                    	<input type="text" class="form-control" id="districtoBarrio"  required>
	                                	</div>
	                                	<button type="submit" class="btn btn-success" id="btnEnviarEmailAAmigo" value="">Enviar Email</button>
							</form>                
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        </div>
				      </div>

			    </div>
  			</div>


  			<div class="modal fade" id="UnirseAPartido" role="dialog">
			    <div class="modal-dialog modal-lg">


			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Unite a un Partido</h4>
			        </div>
			        <div class="modal-body">
			          <div class="panel panel-default">
	                        <div class="panel-body">
	                        	<div class="table-responsive">          
							  <table class="table">
							    <thead>
							      <tr>
							        <th>Fecha</th>
							        <th>Hora de inicio</th>
							        <th>Hora de fin</th>
							        <th>Tipo de Futbol</th>
							        <th>Cantidad de jugadores confirmados</th>
							        <th>Que hago?</th>
							      </tr>
							    </thead>
							    <tbody id="partidosDisponiblesAUnirse">
							    	<tr>
							 
							    	</tr>
							      
							    </tbody>
							  </table>
								</div>
	                        </div>
                    	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>

			    </div>
  			</div>

  			<div class="modal fade" id="PublicarPartido" role="dialog">
			    <div class="modal-dialog modal-lg">


			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Publica el partido para que todos lo vean</h4>
			        </div>
			        <div class="modal-body">
			          <div class="panel panel-default">
	                        <div class="panel-body">
								<form action="#" id="formPublicarPartido">
								    <div class="form-group">
									  <h4><label for="commedetalles" class="label label-info">Detalles del partido:</label></h4>
									  <textarea class="form-control" rows="5" id="commedetalles" placeholder="Lo recomendable es que pongas en que localidad y barrio se va a jugar para que el potencial jugador sepa donde va a ser el partido, los demas detalles es a tu gusto" required="" maxlength="740" minlength="174"></textarea>
									  <p class="bg-danger oculto" id="errorDetallePublicacion"></p>
									</div>
									<button type="submit" class="btn btn-success" id="btnFormModalPublicar">Publicar</button>
								</form>
								<p class="bg-danger oculto" id="errorPublicacionServidor"></p>
	                        </div>
                    	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>

			    </div>
  			</div>

  			<div class="modal fade" id="agregado_al_partido_exito" role="dialog">
			    <div class="modal-dialog modal-lg">


			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Ya formas parte del partido</h4>
			        </div>
			        <div class="modal-body">
			          <div class="panel panel-success">
	                        <div class="panel-heading">
	                        	<h4>Te añadiste al partido correctamente</h4>
	                        </div>
                    	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>

			    </div>
  			</div>
  			<div class="modal fade" id="PublicacionExitosa" role="dialog">
			    <div class="modal-dialog modal-lg">


			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Tu Partido fue publicado</h4>
			        </div>
			        <div class="modal-body">
			          <div class="panel panel-success">
	                        <div class="panel-heading">
	                        	<h4>Solo resta esperar que los jugadores se sumen a tu partido</h4>
	                        </div>
                    	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>

			    </div>
  			</div>

  				<div class="modal fade" id="modalBusqueda" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Buscar Grupos</h4>
				        </div>
				        <div class="modal-body" id="mensajeErrorBusqueda">
				        	<div class="container-fluid">
								<div class="row">
									<div class="panel panel-default">
										<div class="panel-body">
										<form method="get">
											<label for="nombre">Nombre:</label>
											<input class="finput" type="text" name="nombre" id="nombre">
											<button type="button" id="busquedaGrupoAInvitar">Buscar</button>
										</form>
									<br>
									<br>

									<div class="table-responsive">          
									  <table class="table" >
									    <thead>
									      <tr>
									        <th>Imagen</th>
											<th>Nombre</th>
											<th>Cantidad de Miembros</th>
											<th></th>
									      </tr>
									    </thead>
									    <tbody id="Tablabuscada">
									     
									    </tbody>
									  </table>
									</div>
									<br>
										</div>
									</div>
								</div>
							</div>
				        </div>
				        <div class="modal-footer" >
				          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        </div>
				      </div>
				      
				    </div>
				</div>



		</div>
	</body>
</html>