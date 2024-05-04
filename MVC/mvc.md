# Patrón MVC en PHP

### 1. **Definición del MVC**

El patrón Modelo-Vista-Controlador (MVC) se divide en tres componentes principales:

- **Modelo (Model)**: Se encarga de cargar datos y realizar operaciones en ellos. En nuestro caso, gestionará las notas del blog.
- **Vista (View)**: Representa la interfaz gráfica de usuario (GUI) que ve el usuario. Aquí mostraremos las notas y permitiremos editarlas o eliminarlas.
- **Controlador (Controller)**: Interconecta el frontend (Vista) con el backend (Modelo). Se encarga de solicitar datos al Modelo y enviarlos a la Vista.

### 2. **Estructura de Archivos**

Para nuestro ejemplo, utilizaremos una estructura de archivos simple:

- `config/config.php`: Configuración básica, como la conexión a la base de datos y las rutas por defecto.
- `controller/note.php`: El único controlador de nuestra aplicación. Gestionará las notas y las acciones relacionadas.
- `model/note.php`: Modelo para las notas y la base de datos.
- `view/`: Carpeta para las vistas (plantillas HTML).

### 3. **Base de Datos**

Primero, crearemos una base de datos llamada `mvc_example` con una tabla `note`. Aquí está el SQL para crearla:

```sql
CREATE DATABASE mvc_example;
CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `note` ADD PRIMARY KEY (`id`);
```

### 4. **Controlador (controller/note.php)**

```php
<?php
require_once 'model/note.php';

class NoteController {
    public $page_title;
    public $view;
    private $noteObj;

    public function __construct() {
        $this->view = 'list_note';
        $this->page_title = '';
        $this->noteObj = new Note();
    }

    public function list() {
        $this->page_title = 'Listado de notas';
        return $this->noteObj->getNotes();
    }

    public function edit($id = null) {
        $this->page_title = 'Editar nota';
        $this->view = 'edit_note';
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        return $this->noteObj->getNoteById($id);
    }

    public function save() {
        $this->view = 'edit_note';
        $this->page_title = 'Editar nota';
        $id = $this->noteObj->save($_POST);
        return $this->noteObj->getNoteById($id);
    }

    public function confirmDelete() {
        $this->page_title = 'Eliminar nota';
        $this->view = 'confirm_delete_note';
        return $this->noteObj->getNoteById($_GET["id"]);
    }

    public function delete() {
        $this->page_title = 'Listado de notas';
        $this->view = 'delete_note';
        return $this->noteObj->deleteNoteById($_POST["id"]);
    }
}
?>
```

### 5. **Vistas (view/)**

Crea las plantillas HTML para las vistas (listado, edición, eliminación, etc.) en la carpeta `view/`.

### 6. **Rutas y Acciones**

Define las rutas y acciones en `config/config.php`. Por ejemplo:

```php
define("DEFAULT_CONTROLLER", "note");
define("DEFAULT_ACTION", "list");
```

### 7. **Integración con la Vista**

En cada vista, utiliza los datos proporcionados por el controlador para mostrar las notas y permitir la edición o eliminación.