<?php
  $link = mysqli_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $db = mysqli_select_db($link,"u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $resultado = mysqli_query($link,"SELECT * FROM notas_archivadas WHERE id_usuario='$_SESSION[id_usuario]'") or die("<h2>NO HAY USUARIOS</h2>");

  //$res = mysql_result($resultado);
  echo "
  <table border = '1' class='bordered' align='center'> \n
    ";
    echo "
    <tr>
      <td>Titulo</td><td>Descripcion</td><td>Acciones</td>
    </tr> \n
    ";
    while ($row = mysqli_fetch_row($resultado)) {
      echo "
      <tr>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><a href='mover_nota.php?id=".$row[0]."&&tit=".$row[2]."&&des=".$row[3]."'>RECUPERAR NOTA</a><br><a href='borrar_nota.php?id=".$row[0]."'>ELIMINAR</a></td>
      </tr>
      ";
    }
  ?>