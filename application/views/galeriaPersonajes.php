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
        <a class="navbar-brand text-white" href="<?php echo site_url();?>">Evitando Covidxes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?php echo site_url();?>">Descubre la aventura <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?php echo site_url();?>home/galeriaPersonajes"> Galeria Personajes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?php echo site_url();?>home/comoJugar">¿Como se juega? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?php echo site_url();?>home/foroData">Foros <span class="sr-only">(current)</span></a>
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
                        DOCDOC está inspirado en los médicos que recorren las calles en las brigadas médicas para prevenir el covid, algunas veces no muy protegidos y otras perfectamente equipados a medida que se va pasando de nivel ganaras implementos que te ayudaran a luchar contra los covidxes.
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
                        Un covixde está inspirado en el covid un virus que camina entre las calles en busca de familias a quien infectar, cada cierto tiempo va saliendo uno y el personaje principal no puede tocarlo si no tiene protección.
                        </h3>
                </div>    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">  Padre </h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-2 col-sm-2">
                    <img src="<?php echo base_url();?>imagenes/padre.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2" >
                        Encargado de cuidar a su familia está a la espera que su amigo llegue a ayudarlo.
                        </h3>
                </div>    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">  Hija </h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-2 col-sm-2">
                    <img src="<?php echo base_url();?>imagenes/hija.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <h3 class="text-light m-2" >
                        Emocionada por conocer a su amigo que combate contra los covidxes.
                        </h3>
                </div>    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">Escenario Nivel 1</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <img src="<?php echo base_url();?>imagenes/imagen1.png" class="img-fluid" alt="Responsive image">
                        <h3 class="text-light m-2" >
                        Escenario basado en las calles de la cuidad de La Paz en este escenario se desarrolla el primer nivel del juego.
                        </h3>
                </div>    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-dark">Escenario Final</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                        <img src="<?php echo base_url();?>imagenes/imagen3.png" class="img-fluid" alt="Responsive image">
                        <h3 class="text-light m-2" >
                        Escenario final donde nuestro personaje debe llegar a entregar las medicinas.
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
                <li>
                   Juego Desarrollado en: Phaser 3 
                </li>
            </ul>
        </div>
    </footer>
<!-- fin footer -->