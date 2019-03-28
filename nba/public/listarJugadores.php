<?php
require "./../src/Jugador.php";
$jugador = new Jugador();
$jugador->conectar();
$resultado=$jugador->listarJugadores();
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
         <td>Codigo</td>
         <td>Nombre</td>
         <td>Altura</td>
         <td>Peso</td>
         <td>Posicion</td>
         <td>Nombre_equipo</td>
       </tr>

       <?php foreach ($resultado as $jugador){
        echo "<tr>";
        echo "<td>".$jugador['codigo']."</td>";
        echo "<td>".$jugador['Nombre']."</td>";
        echo "<td>".$jugador['Altura']."</td>";
        echo "<td>".$jugador['Peso']."</td>";
        echo "<td>".$jugador['Posicion']."</td>";
        echo "<td>".$jugador['Nombre_equipo']."</td>";
        echo "<tr>";
        }
        ?>

     </table>
     <?php include "./assets/footer.php"; ?>
   </body>
 </html>
