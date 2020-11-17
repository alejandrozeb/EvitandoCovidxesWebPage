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
    <title>Asistente AEE</title>

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
    <!-- inicio main -->
        <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-dark">  TRAILER</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">  DOCDOC</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <img src="<?php echo base_url();?>imagenes/medico.gif" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2" >
                        El juego se basa en la Pandemia del coronavirus por la que estamos pasando y el rol que cumplen los médicos en las brigadas médicas para poder controlar dicha enfermedad donde controlamos a un personaje inspirado en los médicos y debemos pasar por diferentes locaciones de Bolivia para entregar los medicamentos a las familias que lo necesitan mientras nos enfrentamos a los covidxes.
                        </h3>
                </div>    
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">  Covidxes </h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-9 col-sm-9">
                    <img src="<?php echo base_url();?>imagenes/covidxe.gif" class="img-fluid" alt="Responsive image">
                    <img src="<?php echo base_url();?>imagenes/covidxe.gif" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2" >
                        El juego se basa en la Pandemia del coronavirus por la que estamos pasando y el rol que cumplen los médicos en las brigadas médicas para poder controlar dicha enfermedad donde controlamos a un personaje inspirado en los médicos y debemos pasar por diferentes locaciones de Bolivia para entregar los medicamentos a las familias que lo necesitan mientras nos enfrentamos a los covidxes.
                        </h3>
                </div>    
            </div>
        </div>
        </main>
        
        
    <!-- fin main -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
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