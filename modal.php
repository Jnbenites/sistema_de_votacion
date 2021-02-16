  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
  <!--End bootstrap -->
<button class="btn btn-primary" data-toggle='modal' data-target='#modal1'>Ingresar alumno</button>
<div class="container">
	<div class="modal fade" tabindex="-1" id="modal1">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-center">Agregar alumno</h2>
				</div>
				<div class="modal-body">
					<form method="POST"  required="" action="insertar_alumno.php">
					<label>Nombre Completo</label>
					<input type="text" required="" class="form-control" name="txtnombre">
					<label>cedula</label>
					<input type="number" required="" class="form-control" name="txtcedula">
					<label>clave</label>
					<input type="text" required="" class="form-control" name="txtclave">
					<input type="hidden" class="form-control" name="oculto" value="1">
					<br>
					<input type="submit" class="btn btn-primary" value="Agregar alumno">
					<button type="button" href="/eliminar_alumno.php" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</form>

				</div>
			</div>
	</div>
	</div>
</div>

<br>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>


