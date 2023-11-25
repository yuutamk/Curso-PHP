<!DOCTYPE html>
<html>
<head>
  <title>Lista de Productos</title>
  <style>
    .producto {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }
    img {
      max-width: 200px;
      height: auto;
    }
  </style>
</head>
<body>
  <h1>Lista de Productos</h1>

  <?php
  // Arreglo de productos
  $productos = array(
    array("nombre" => "Producto 1", "descripcion" => "Descripción del producto 1", "precio" => 10.99, "imagen" => "./Resources/arrays/chanclas.webp"),
    array("nombre" => "Producto 2", "descripcion" => "Descripción del producto 2", "precio" => 19.99, "imagen" => "./Resources/arrays/anillos.webp"),
    array("nombre" => "Producto 3", "descripcion" => "Descripción del producto 3", "precio" => 7.99, "imagen" => "./Resources/arrays/grifo.webp")
  );

  // Generar la lista de productos
  foreach ($productos as $producto) {
    echo '<div class="producto">';
    echo '<img src="' . $producto["imagen"] . '">';
    echo '<h3>' . $producto["nombre"] . '</h3>';
    echo '<p>' . $producto["descripcion"] . '</p>';
    echo '<p>Precio: $' . $producto["precio"] . '</p>';
    echo '</div>';
  }
  ?>

</body>
</html>