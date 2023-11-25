
Lección 3: Arrays
=================

Una dimensión
-------------

No es posible almacenar más de un valor en una sola variable, a no ser que utilicemos un `array`.

Un `array` es un mapa ordenado donde los datos tendrán una clave (`key`) pero muchos valores (`values`). Por ejemplo, podríamos guardar los días de la semana bajo el mismo nombre de variable.

```php
    $semana = [
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sábado',
        'Domingo'
    ];
```

Los valores están dentro de corchetes (`[]`) separados por comas. De esta formar se asigna automáticamente un marcador que empieza por cero. Si quiero leer por separado cada elemento debo asignar el marcador envuelto en corchetes.

```php
    echo $semana[0]; // Lunes
    echo $semana[3]; // Jueves
    echo $semana[6]; // Domingo
```    

Si quiero ver todo el contenido puedo usar la función nativa de PHP `var_dump`. Nos dirá la longitud del `array`, la posición de cada elemento, su tipo, longitud de cada valor y el propio valor que almacena.

```php
    var_dump($semana);
    
    /*
    array(7) {
      [0] =>
      string(5) "Lunes"
      [1] =>
      string(6) "Martes"
      [2] =>
      string(10) "Miércoles"
      [3] =>
      string(6) "Jueves"
      [4] =>
      string(7) "Viernes"
      [5] =>
      string(7) "Sábado"
      [6] =>
      string(7) "Domingo"
    }
    */
```


`var_dump` no necesita añadir un `echo` delante.


Usa `var_dump` en lugar de `print_r`, proporciona más información.

Dentro de un array puede existir cualquier tipo, al igual que una variable.

```php
    $corteIngles = [
        'Azul',
        39,
        True,
        11
    ];
```    

## Crear

Para declarar un `array` vacío solamente debemos crear una variable donde asignemos unos corchetes.

```php
    $planetas = [];
```    

También lo puedes crear con su función: `$planetas = array();`.

## Añadir

Y para ir añadiendo elementos.

```php
    $planetas[] = 'Marte';
    $planetas[] = 'Tierra';
    $planetas[] = 'Venus';
    

    var_dump($planetas);
    
    /*
    array(3) {
      [0] =>
      string(5) "Marte"
      [1] =>
      string(6) "Tierra"
      [2] =>
      string(5) "Venus"
    }
    */
 ```   

Y si queremos utilizar un método más orientado a la programación funcional, podemos usar `array_merge` para crear un nuevo `array`.

```php
    // Array de partida
    $planetas = ['Marte', 'Tierra', 'Venus'];
    
    // Añadimos 'Mercurio'
    $nuevosPlanetas = array_merge($planetas, ['Mercurio']);
    
    // Vemos el resultado
    var_dump($nuevosPlanetas);
    
    /*
    array(4) {
      [0]=>
      string(5) "Marte"
      [1]=>
      string(6) "Tierra"
      [2]=>
      string(5) "Venus"
      [3]=>
      string(8) "Mercurio"
    }
    */
```    

Una utilidad muy práctica para saber la longitud de un `array` es usar la funcion `count()`.

```php
    echo count($planetas);
    // 3
```    

## Modificar

Para cambiar un valor hay que indicar la posición y el nuevo valor a introducir. ¿Recuerdas que el símbolo `=` es en realidad `←`?

```php
   $planetas[2] = 'Saturno';
```    

## Borrar

Eliminar un elemento es un poco más marciano, debes usar una función nativa llamada `unset`. Personalmente creo que ha sido creada por un ser malvado. Me explico.

Supongamos que quiero destruir la Tierra antes de que lo haga el hombre. Es el 2º elemento, cuya posición es la 1.

```php
  unset($planetas[1]);
```

Veamos que ha pasado.

```php
    var_dump($planetas);
    /*
    array(2) {
      [0] =>
      string(5) "Marte"
      [2] =>
      string(5) "Venus"
    }
    */
```    

Se ha ido… pero ¡me ha desordenado las posiciones! Intentamos hacer un `Ctrl+Z` añadiendo la Tierra de nuevo.

```php
    // Añado
    $planetas[] = 'Tierra';
    // Muestro todo
    var_dump($planetas);
    /*
    array(2) {
      [0] =>
      string(5) "Marte"
      [2] =>
      string(5) "Venus"
      [3] =>
      string(6) "Tierra"
    }
    */
```    

Como dijo Jack Swigert en el Apolo 13: “-Houston, tenemos un problema-“. Nuestro `array` pierde la posición que borramos para siempre. En realidad no es un problema porque la gran mayoría de las ocasiones lo recorreremos con un bucle (`loop`) e ignoraremos las posiciones, pero debes ser consciente de como funciona para no encontrarte sorpresas.

No obstante siempre puedes ignorar mis palabras y ordenarlo creando un nuevo array con un `loop` malgastando recursos.

```php
    // Elimino la Tierra
    unset($planetas[1]);
    // Declaro mi nuevo array
    $planetasSinTierra = [];
    // Lo asigno elemento por elemento
    foreach ($planetas as $posicion => $nombre) {
        $planetasSinTierra[] = $nombre;
    }
```    


## Jugando con Strings

Observa y dime que ocurre.

```php
    $palabra = 'abcdef';
    echo $palabra[2];
    // c
```    

¿Qué ha pasado? Pues que los `string` pueden ser manipulados igual que un `array`.

```php
    $palabra = 'abcdef';
    $palabra[2] = 'Z';
    echo $palabra;
    // abZdef
```    

Un `string` se comporta como un `array` porque en el fondo no existen las palabras en la programación, sino **conjuntos de carácteres**. Dicho de otra manera: un `string` es un `array` de muchas letras.

## Convertir un String en un Array

En algún momento tendrás la necesidad de pasar un texto a un `array` por medio de algún separador. Por ejemplo, transformar **una frase a array dividido por espacios**. Te dejo un ejemplo para realizarlo. El secreto esta en usar **preg\_split**.


```php
    $frase = 'En un lugar de la mancha';
    $arrayDeFrase = preg_split('/[\s,]+/', $frase);
    echo $arrayDeFrase[2];
    // "lugar"
    var_dump($arrayDeFrase);
    /*
    array(6) {
      [0] =>
      string(2) "En"
      [1] =>
      string(2) "un"
      [2] =>
      string(5) "lugar"
      [3] =>
      string(2) "de"
      [4] =>
      string(2) "la"
      [5] =>
      string(6) "mancha"
    }
    */
```    

No uses **split()**, la función esta OBSOLETA desde la versión 5.3.0. y ha sido ELIMINADA en la versión 7.0.0.



Diccionario
---

Las claves (`key`) pueden ser definidas por nosotros. A esto se le denomina **diccionario**.

```php
    $empleados = [
        'Juan' => 34,
        'Luisa' => 56
    ];
```   

Para **leer** será de la misma forma, salvo que ya no tenemos posiciones sino nuestras propias claves.

```php
    echo $empleados['Luisa'];
```    

A la hora de **añadir** tendrás que indicar directamente el nombre que quieras darle.

```php
    $empleados = [];
    $empleados['Manolo'] = 99;
    var_dump($empleados);
    /*
    array(1) {
      'Manolo' =>
      int(99)
    }
    */
```    

**Modificar** será igual, indicando la clave.

```php
    $empleados['Manolo'] = 11;
    var_dump($empleados);
    /*
    array(1) {
      'Manolo' =>
      int(11)
    }
    */
```    

Y borrar de la misma forma que un `array`.

```php
    $empleados = [];
    $empleados['Manolo'] = 99;
    $empleados['Juan'] = 99;
    var_dump($empleados);
    /*
    array(2) {
      'Manolo' =>
      int(99)
      'Juan' =>
      int(99)
    }
    */
    unset($empleados['Manolo']);
    var_dump($empleados);
    /*
    array(1) {
      'Juan' =>
      int(99)
    }
    */
```    



Dos dimensiones
---------------

Al principio de la lección dije que se podía añadir dentro de un `array` cualquier elemento, incluso… podríamos rizar el rizo insertando… ¡Otro `array`! A esto se le llama **array de dos dimensiones**, cuando un `array` tiene dentro otro `array`.

```php
    $rizo = [
        []
    ]
    

    var_dump($rizo);
    /*
    array(1) {
      [0] =>
      array(0) {
      }
    }
    */
```    

Tiene infinidad de usos. Pensemos que has heredado de un tio rico una tienda de ropa. Cada producto tiene su propio código de barras, precio, nombre, color y género.

```php
    $zara = [
        123 => [
          'nombre' => 'Camisa a cuadros',
          'precio' => 29.95,
          'sexo' => 'Hombre'
        ],
        234 => [
          'nombre' => 'Falda manga',
          'precio' => 19.95,
          'sexo' => 'Mujer'
        ],
        345 => [
          'nombre' => 'Bolso minúsculo',
          'precio' => 50,
          'sexo' => 'Mujer'
        ]
    ];
    

    var_dump($zara);
    /*
    array(3) {
      [123] =>
      array(3) {
        'nombre' =>
        string(16) "Camisa a cuadros"
        'precio' =>
        double(29.95)
        'sexo' =>
        string(6) "Hombre"
      }
      [234] =>
      array(3) {
        'nombre' =>
        string(11) "Falda manga"
        'precio' =>
        double(19.95)
        'sexo' =>
        string(5) "Mujer"
      }
      [345] =>
      array(3) {
        'nombre' =>
        string(16) "Bolso minúsculo"
        'precio' =>
        int(50)
        'sexo' =>
        string(5) "Mujer"
      }
    }
    
    */
```    

El mecanismo para gestionarlo es igual al diccionario salvo que debemos ir nodo por nodo.

```php
    echo $zara[345]['nombre'];
    // Bolso minúsculo
```