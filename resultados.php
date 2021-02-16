<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema de votacion</a>

                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cargar_alumnos.php">Administrar alumnos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cargar_lista.php">Administrar lista</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="resultados.php">Resultados</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="salir.php">salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>




        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"></h2>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
 <div class="container d-flex align-items flex-column">
                <!-- List users-->
<?php include_once "bd/connection.php"; 
  $sentencia = $bd->query('select * from lista;');
  $lista = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php 
  foreach ($lista as $dato) {
?>
   <!--  <a>< ?php echo $dato->id_lista?></a>  -->
<?php include_once "bd/connection.php";
  $xd = $dato->id_lista;
  $sentencia = $bd->prepare('SELECT * FROM `usuario` WHERE `voto` = ?');
  $sentencia->execute([$xd]);
  $nulo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php
                     }
?>




<?php include_once "bd/connection.php"; 
  $sentencia = $bd->query('SELECT * FROM `usuario` WHERE `voto` = 0');
  $nulox = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>



</div>          
</div>
</div>
</section>


<section>
<div class="row content-center">

<?php 
  foreach ($lista as $dato) {
?>
   <!--  <a>< ?php echo $dato->id_lista?></a>  -->
<div class="col-md-6 col-lg-4 mb-5">
  <div class="col-md-6 col-lg-4 mb-5">
    <div>

<?php include_once "bd/connection.php";
  $xd = $dato->id_lista;
  $sentencia = $bd->prepare('SELECT * FROM `usuario` WHERE `voto` = ?');
  $sentencia->execute([$xd]);
  $nulo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

 <!-- <p><?php echo $dato->id_lista?> </p> -->
    <div class="row justify-content-center">
      <img src="/imagenes/images.png" alt="..." class="rounded-lg center-block" style="width: 30%; height:30%; ">
    </div>
      <h2 class="text-center" style="min-height:50px;"><?php echo $dato->nombre_lista?></h2>
      <h2 class="text-center" style="min-height:50px;"><?php echo count($nulo)?></h2>
    </div>
  </div>
</div>


<?php
                     }
?>
`
<div class="col-md-6 col-lg-4 mb-5">
<div class="text-center">
  <div class="col-md-6">
    <div>
      
    <div class="center-block">
      <img src="/imagenes/nuloi.png" alt="..." class="rounded-lg center-block" style="width: 30%;">
      <h2>Votos invalidos</h2>
    </div>
      <h2 class="text-center" style="min-height:50px;"><?php echo count($nulox)?></h2>
    </div>
  </div>
</div>

</section>
       
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Juan Benites 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>