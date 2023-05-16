<form action="
    <?php 
        echo htmlspecialchars($_SERVER['PHP_SELF']);
    ?>"
method="post">

    <labe>Ingresa tus donaciones</label>
    <input type="text" name="count">
    <button name="submit">Solicitar</button>

</form>

<?php

if(isset($_POST['submit']) || isset($_GET['submit'])){
    if( $_POST['count'] >= 100){
        echo 'Tu dinero se enviara pronto enjoy :)';
    } else{
        echo "Sigue haciendo stream tus donaciones
        son  {$_POST['count']} USD
         de debe ser mayor a 100 USD"; 
    }
}