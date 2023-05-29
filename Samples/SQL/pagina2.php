<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "yuuta", "110263", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(name,mail,codigocurso) values 
                       ('$_REQUEST[name]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>

</html>