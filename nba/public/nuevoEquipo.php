<?php
require "./../src/Equipo.php";

  $e=new Equipo();
  $error=$e->comprobarCampos($_POST);

  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $e->conectar();
        $e->insertarEquipo($_POST);
      }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="./css/nba.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
      <?php include "./assets/navSup.php" ?>

      <?php if(isset($error)){
          if($error!="") echo "<h4>ERROR:$error</h4>";
      }
      ?>
      <h2>Nuevo Equipo</h2>
      <form class="formNBA" action="nuevoEquipo.php" method="post">
        <div class="grupoFormItem">
          <label for="Nombre"></label>
          <span class="formLabel">Nombre </span>
          <input type="text" name="Nombre" value="">
        </div>
        <div class="grupoFormItem">
          <label for="Ciudad"></label>
          <span class="formLabel">Ciudad </span>
          <input type="text" name="Ciudad" value="">
        </div>
        <div class="grupoFormItem">
          <label for="Conferencia"></label>
          <span class="formLabel">Conferencia </span>
          <input type="text" name="Conferencia" value="">
        </div>
        <div class="grupoFormItem">
          <label for="Division"></label>
          <span class="formLabel">Division </span>
          <input type="text" name="Division" value="">
        </div>
        <input type="submit" name="" value="insertar">
      </form>
      <?php include "./assets/footer.php"; ?>
    </body>
  </html>
