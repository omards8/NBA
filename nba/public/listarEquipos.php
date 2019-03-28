<?php
require "./../src/Equipo.php";
$equipo = new Equipo();
$equipo->conectar();
$resultado=$equipo->listarEquipos();
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
    <?php include "assets/navSup.php"; ?>
    <table>
      <tr>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Conferencia</td>
        <td>Division</td>
      </tr>
      <?php foreach ($resultado as $equipo){
       echo "<tr>";
       echo "<td>".$equipo['Nombre']."</td>";
       echo "<td>".$equipo['Ciudad']."</td>";
       echo "<td>".$equipo['Conferencia']."</td>";
       echo "<td>".$equipo['Division']."</td>";
       echo "<tr>";
       }
      ?>
    </table>
    <?php include "./assets/footer.php" ?>
  </body>
</html>
