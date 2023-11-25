<?php
// Array con indice numerico (Indexado)
$nombre = "Aner"; 
$array = array(1, 2, 3, "casa", $nombre);

//Para recorrer el arreglo

//saco el numero de elementos
echo "<h4>Array indexado</h4>";

$longitud = count($array);
 
//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
      {
      //saco el valor de cada elemento
	  echo $array[$i];
	  echo "<br>";
      }

echo $array [3];
echo "<br>";

// array asociativo
$equipo = array('portero'=>'Cech', 'defensa'=>'Terry', 'medio'=>'Lampard', 'delantero'=>'Torres');

echo "<h4>Array asociativo</h4>";
//Para recorrer el arreglo

foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
	}

echo $equipo['delantero'];
echo "<br>";


// array bidimencional (multidimensional)

$equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);
echo "<h4>Array bidimencional</h4>";
// Para recorrer el array                    

    foreach($equipo_futbol as $equipo)
    {
    echo "En este equipo juegan: ";
    foreach($equipo as $jugador)
        {
        echo $jugador ." ";
        }
    echo "<br>";
    }

echo $equipo_futbol[0][1];
echo "<br>";

// array tridimencional

$datos = array(
    array(array(0, 0, 0),
          array(0, 0, 1),
          array(0, 0, 2) 
          ),
    array(array(0, 1, 0),
          array(0, 1, 1),
          array(0, 1, 2) 
          ),
    array(array(0, 2, 0),
          array(0, 2, 1),
          array(0, 2, 2) 
          )
    );

echo "<h4>Array tridimencional</h4>";
// Para rerrorer el array

    foreach($datos as $datos2)
 	{
 	foreach($datos2 as $datos3)
 		{
 		foreach($datos3 as $dato)
 			{
 			echo "$dato ";
 			}
 		echo "<br>";
 		}
 	echo "<br>";
 	}


echo $datos[0][2][1];
echo "<br>";

// Strings
$palabra = 'abcdef';
echo $palabra[2];
?>