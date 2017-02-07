<?php
  $link = mysqli_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $db = mysqli_select_db($link,"u980603238_notas") or die("<h2>BD no encontrada</h2>");
  $resultado = mysqli_query($link,"SELECT * FROM notas_imagenes WHERE id_usuario='$_SESSION[id_usuario]'") or die("<h2 align='center'>NO HAY IMAGENES</h2>");

  //$res = mysql_result($resultado);
  echo "
  <table border = '1' class='bordered' align='center'> \n
    ";
    echo "
    <tr>
      <td>Título</td><td>Imagen</td><td>Acciones</td>
    </tr> \n
    ";
    while ($row = mysqli_fetch_row($resultado)) {
      echo "
      <tr>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><a href='mostrar_imagen.php?id=".$row[0]."'>VER</a><br><a href='borrar_imagen.php?id=".$row[0]."'>BORRAR</a></td>
      </tr>
      ";
    }
  ?>