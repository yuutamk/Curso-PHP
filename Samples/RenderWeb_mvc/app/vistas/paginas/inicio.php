<?php require_once RUTA_APP .'/vistas/inc/header.php';?>
<p><?php echo $datos['titulo'];?></p>
<ul>
    <?php foreach ($datos['articulos'] as $articulo) :  ?>
        <li><?php echo $articulo->titulo; ?></li>
    <?php endforeach; ?>
</ul>
<?php require_once RUTA_APP .'/vistas/inc/footer.php';?>

<!--<p><//?php 
    //echo RUTA_APP;
?><--<p>