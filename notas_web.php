<?php
  $link = mysqli_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $db = mysqli_select_db($link,"u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $resultado = mysqli_query($link,"SELECT * FROM notas WHERE id_usuario='$_SESSION[id_usuario]'") or die("<h2>NO HAY NOTAS</h2>");

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
        <td><a href='modificar_nota.php?id=".$row[0]."'>EDITAR</a><br><a href='eliminar_nota.php?id=".$row[0]."&&tit=".$row[2]."&&des=".$row[3]."'>ARCHIVAR</a></td>
      </tr>
      ";
    }
  ?>