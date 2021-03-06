<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$dataForo = $this->session->userdata('dataForo');
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
                    <a class="nav-link text-white" href="#desAve">Descubre la aventura <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link text-light btn btn-outline-light" href="<?php echo site_url();?>home/download">Juega Gratis <span class="sr-only">(current)</span></a>
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
            <?php foreach ($dataForo as $foro) {
            ?>
            <div class="col-12 text-center">
                    <h1 class="text-dark">Respuesta</h1>
            </div>
            <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
                    <h2 class="text-light"><p class="text-white-50">NickName: </p> <?php echo $foro['u_nombre']; ?></h2>
                    <h3 class="text-light m-2" >
                        <p class="text-white-50">Comentario: </p>
                        <?php echo $foro['u_comentario']; ?> 
                    </h3>
            </div>

            <?php    
            } ?> 
                <div class="col-12 text-center mt-3">
                    <h1 class="text-dark">Foro</h1>
                </div>
            <div class="col-8 col-sm-10 p-5 m-5 bg-dark rounded align-self-center">
            <img src="<?php echo base_url();?>imagenes/covidxe3.png" class="img-fluid" alt="Responsive image">
            <?php echo form_open('home/foroProcessForm');?>
                <div class="form-group text-light">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="u_email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group text-light">
                    <label for="exampleInputEmail1">Nombre o nickname</label>
                    <input type="text" class="form-control" id="exampleInputText" name="u_nombre" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group text-light">
                    <label for="exampleInputPassword1">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="u_comentario" placeholder="Escribe tus comentarios o preguntas" required></textarea>
                </div>
                <button type="submit" name="u_form" class="btn btn-secondary">Enviar</button>
            <?php echo form_close(); ?>
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
                <li>
                   Juego Desarrollado en: Phaser 3 
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