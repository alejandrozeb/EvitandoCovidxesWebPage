<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Evitando Covidxes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href= "<?php echo base_url();?>assets/css/bootstrap.min.css">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Estilos -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"/>
  </head>
  <body>

  <!-- nav Inicio -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="#">Evitando Covidxes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#desAve">Descubre la aventura <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#"> Galeria Personajes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">¿Como se juega? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Foros <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light btn btn-outline-light" href="#">Juega Gratis <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
  <!-- nav Final -->
  <!-- Inicio main -->
  <img src="<?php echo base_url();?>imagenes/imagen2.png" class="img-fluid" alt="Responsive image">    
  <main>  
      <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">  Controles</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <img src="<?php echo base_url();?>imagenes/controles.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2 text-center" >
                        <p>W para saltar</p>    
                        <p>A para ir a la izquierda</p> 
                        <p>D para ir a la derecha</p>
                        <p>S para caer</p>
                        </h3>
                </div>    
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark"> Objetos</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <img src="<?php echo base_url();?>imagenes/ladrillos.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2 text-center" >
                        <p>Usa los ladrillos para evitar a los covidxes.</p>    
                        </h3>
                </div>
                <div class="col-6 align-self-center">
                    <img src="<?php echo base_url();?>imagenes/juego1.png" class="img-fluid m-3" alt="Responsive image">
                </div>    
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">Evitalos</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <img src="<?php echo base_url();?>imagenes/juego2.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-4">
                    <img src="<?php echo base_url();?>imagenes/controles.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2 text-center" >
                        <p>W para saltar</p>    
                        <p>A para ir a la izquierda</p> 
                        <p>D para ir a la derecha</p>
                        <p>S para caer</p>
                        </h3>
                </div>    
            </div>
        </div>

  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
  <!-- Fin inicio -->
<!-- inicio footer -->
    <footer class="footer mt-3 py-3 bg-dark">
        <div class="container">
            <span class="text-light">Contactame </span>
            <ul class="text-light">
                <li>
                   Email: alejandrojzeballos@gmail.com 
                </li>
                <li>
                   Facebook: Zeballos Alejandro 
                </li>
                <li>
                   Git: Zeballos Alejandro 
                </li>
            </ul>
        </div>
    </footer>
<!-- fin footer -->

















        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>