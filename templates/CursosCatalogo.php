<?php

    include 'bd/conexion.php';

    require_once "vistas/header.php";
    
   // $conexion=mysqli_connect('localhost','id18960420_cibersegdb','QkrWkFCgvcw?$)#1','id18960420_ciberseg');
      $conexion=mysqli_connect('localhost','root','','ciberseg');

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>


	<title>
		Ciber Segurito
	</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<br><br><br>
	<div class="container">
		<br><br>
		<h3 class="text-Dark py-4" style="text-align: center; border-bottom: dashed; border-top: dashed; border-color: #E56EFF; border-width: 8px;">¡CURSOS NUEVOS!</h3>
		<br>
	</div>

	<!--Tarjetas-->
	<div class="container">
	<div class="row" align="center">

		<?php 
    		$sql="SELECT * from cursos WHERE Estado='Nuevo'";
    		$result=mysqli_query($conexion,$sql);
    		foreach ($result as $row) {?>

     	<!--Mostrar cursos de la BD en tarjetas-->
     	<div class="col-12 col-md-6 col-lg-3">
			<div class="card" style="width: 270px; border-radius: 8px; box-shadow: 0 2px 2px rgba(0,0,0,0.2); overflow: hidden; margin: 20px; text-align: left; transition: all 0.25s;">
				<?php 	$img=$row['Imagen'];
						$imagen="Imagenes/$img"
				?>
  				<img src="<?php echo $imagen;?>" class="card-img-top" alt="Curso" height="120px">
  				<div class="card-body" style="min-height: 200px;>
    				<h5 class="card-title"><?php echo $row['NombreCurso']; ?></h5>
    				<p class="card-text text-left">$<?php echo number_format($row['Precio'],2,'.',',');?></p>
    			<div class="card-footer bg-transparent">
    				<div>
	    				<a href="detalleCurso.php?IDCurso=<?php echo $row['IDCurso']?>" class="btn btn-primary btn-block">Detalles</a>
	    				</div>
				</div>
				</div>
			</div>
		</div>
  			<?php 
  			}?>
	</div>
	</div>



	<div class="container">
		<br><br>
		<h3 class="text-Dark py-4" style="text-align: center; border-bottom: dashed; border-top: dashed; border-color: #E56EFF; border-width: 8px;">¡CURSOS RECOMENDADOS!</h3>
		<br>
	</div>

	<!--Tarjetas-->
	<div class="container">
	<div class="row" align="center">

		<?php 
    		$sql="SELECT * from cursos WHERE Estado='Recom'";
    		$result=mysqli_query($conexion,$sql);
    		foreach ($result as $row) {?>

     	<!--Mostrar cursos de la BD en tarjetas-->
     	<div class="col-12 col-md-6 col-lg-3">
			<div class="card" style="width: 270px; border-radius: 8px; box-shadow: 0 2px 2px rgba(0,0,0,0.2); overflow: hidden; margin: 20px; text-align: left; transition: all 0.25s;">
				<?php 	$img=$row['Imagen'];
						$imagen="Imagenes/$img"
				?>
  				<img src="<?php echo $imagen;?>" class="card-img-top" alt="Curso" height="120px">
  				<div class="card-body" style="min-height: 200px;>
    				<h5 class="card-title"><?php echo $row['NombreCurso']; ?></h5>
    				<p class="card-text text-left">$<?php echo number_format($row['Precio'],2,'.',',');?></p>
    			<div class="card-footer bg-transparent">
    				<div>
	    				<a href="detalleCurso.php?IDCurso=<?php echo $row['IDCurso']?>" class="btn btn-primary btn-block">Detalles</a>
	    			</div>
				</div>
				</div>
			</div>
		</div>
  			<?php 
  			}?>
	</div>
	</div>



	<div class="container">
		<br><br>
		<h3 class="text-Dark py-4" style="text-align: center; border-bottom: dashed; border-top: dashed; border-color: #E56EFF; border-width: 8px;">TODOS LOS CURSOS</h3>
		<br>
	</div>

	<!--Tarjetas-->
	<div class="container">
	<div class="row" align="center">

		<?php 
    		$sql="SELECT * from cursos";
    		$result=mysqli_query($conexion,$sql);
    		foreach ($result as $row) {?>

     	<!--Mostrar cursos de la BD en tarjetas-->
     	<div class="col-12 col-md-6 col-lg-3">
			<div class="card" style="width: 250px; border-radius: 8px; box-shadow: 0 2px 2px rgba(0,0,0,0.2); overflow: hidden; margin: 20px; text-align: left; transition: all 0.25s;">
				<?php 	$img=$row['Imagen'];
						$imagen="Imagenes/$img"
				?>
  				<img src="<?php echo $imagen;?>" class="card-img-top" alt="Curso" height="120px">
  				<div class="card-body" style="min-height: 200px;>
    				<h5 class="card-title"><?php echo $row['NombreCurso']; ?></h5>
    				<p class="card-text text-left">$<?php echo number_format($row['Precio'],2,'.',',');?></p>
    			<div class="card-footer bg-transparent">
    				<div>
    				<a href="detalleCurso.php?IDCurso=<?php echo $row['IDCurso']?>" class="btn btn-primary btn-block">Detalles</a>
    				</div>
				</div>
				</div>
			</div>
		</div>
  			<?php 
  			}
   			?>
	</div>
	</div>









		<br><br><br><br>

		<?php
			require_once "vistas/footer.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	
</body>
</html>