  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
  <!--End bootstrap -->
<button class="btn btn-primary" data-toggle='modal' data-target='#modal2'>Ingresar lista</button>
<div class="container">
	<div class="modal fade" tabindex="-1" id="modal2">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-center">Agregar lista</h2>
				</div>
				<div class="modal-body">
					<div class="center-block">
					  <form method="POST"  action="insertar_lista.php">
					    <label>Nombre lista</label>
					    <input type="text" required="" class="form-control" name="txtnombre_lista">
					    <label>Presidente</label>
					    <input type="text" required="" class="form-control" name="txtpresidente">
					    <label>Vicepresidente</label>
					    <input type="text" required="" class="form-control" name="txtvicepresidente">
					    <label>Tesorero</label>
					    <input type="text" required="" class="form-control" name="txttesorero">
					    <label>Secretario</label>
					    <input type="text" required="" class="form-control" name="txtsecretario">
					    <label>Vocal 1</label>
					    <input type="text" required="" class="form-control" name="txtvocal1">
					    <label>Vocal 2</label>
					    <input type="text" required="" class="form-control" name="txtvocal2">

					    <input type="hidden" class="form-control" name="oculto" value="3">
					      <br>
					    <input type="submit" class="btn btn-primary" value="agregar lista">
					    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					  </form>
					</div>
				</div>
			</div>
	</div>
	</div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>


