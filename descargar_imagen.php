<?php
  session_start();
  if (!isset($_SESSION['id_usuario'])) {
    header("Location: login_web.php");
  }

      <?php
        //conexion a la base de datos
          mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die(mysql_error()) ;
          mysql_select_db("u980603238_notas") or die(mysql_error()) ;

          //si la variable imagen no ha sido definida nos dara un advertencia.
          $id = $_GET['id'];

          //vamos a crear nuestra consulta SQL
          $consulta = "SELECT imagen FROM notas_imagenes WHERE id_img = $id";
          //con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
          //de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
          $resultado= @mysql_query($consulta) or die(mysql_error());

          //si el resultado fue exitoso
          //obtendremos el dato que ha devuelto la base de datos
          $datos = mysql_fetch_assoc($resultado);
          //ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
          $ruta = "imagenes/" . $datos['imagen'];

          //ahora solamente debemos mostrar la imagen
          echo "<a href='$ruta' download/>";

        ?>