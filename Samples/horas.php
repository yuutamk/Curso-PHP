

<!-- /* $segundos = readline("Ingresa el tiempo en segundos: ");

$horas = $segundos / 3600;
$segundos = $segundos % 3600;
$minutos = $segundos / 60;
$segundos = $segundos % 60;


echo "Son $horas horas, $minutos minutos y $segundos segundos."; */




/* Otra manera de solucionarlo */

/* $user_time =  readline("enter the time in seconds: ");
$hour = floor($user_time / 3600);
$minute = floor(($user_time - ($hour * 3600)) / 60);
$seconds = $user_time % 3600 % 60;

$result = ($hour * 3600) + ($minute * 60) + $seconds;
echo "The time is: $hour hours, $minute minutes and $seconds seconds";
echo "\n $user_time seconds is $result seconds"; */ -->





<form name="formulario" method="post" action="resultado_horas.php">

Ingresa sol segundos: <input type="text" name="nombre" value="">

<input type="submit" />

</form>


