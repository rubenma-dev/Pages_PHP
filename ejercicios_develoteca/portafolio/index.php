<?php include ("cabecera.php"); ?>
<?php include ("conexion.php"); ?>
<?php

$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bienvenid@s</h1>
          <p class="col-md-8 fs-4">Este es un portafolio privado</p>
          <button class="btn btn-primary btn-lg" type="button">Mas informacion</button>


        </div>
      </div>


<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach($proyectos as $proyecto) {?>

    <div class="col">
    <div class="card">
      <img src="imagenes/<?php echo $proyecto['imagen'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
    </div>
  </div>

  <?php } ?>

</div>
<?php include ("pie.php"); ?>