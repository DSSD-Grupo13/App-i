<!DOCTYPE html>
<html>
<head>
	<title>SSA Incidentes</title>
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
	<script type="text/javascript">
		Dropzone.options.imageUpload = {
	        maxFilesize:1,
	        acceptedFiles: ".jpeg,.jpg,.png,.gif"
	    };
	</script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h2>Carga de imágenes de incidentes</h2>
			<form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
				<div>
					<center><h3>Elige todas las imágenes que desea cargar</h3>
				</div>
				<div>
					<h5> Nombre de usuario </h5>
	        <input type="text" id="nomUsuario" name="nomUsuario" required/>
	        <h5> Id Incidente </h5>
	        <input type="number" maxlength="10" name="idIncidente" id="idIncidente" required>
				</div>
				<br><br>
			<input type="button" class="btn btn-primary" value="Nueva Carga" onClick="window.location.reload()"></center>

			</form>
		</div>
	</div>
</div>
</body>
</html>
