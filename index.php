<?php
$conexion = new mysqli("localhost", "root", "", "pagina2");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Insertar nuevo proyecto si se envía el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['imagen'])) {
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $imagen_url = $conexion->real_escape_string($_POST['imagen']);

    $insertarProyecto = "INSERT INTO proyectos (TÍTULO, DESCRIPCIÓN, ENLACE_IMAGEN) VALUES ('$titulo', '$descripcion', '$imagen_url')";
    $conexion->query($insertarProyecto);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Personal</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Carta de Presentación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio-section">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectos-section">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto-section">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Sección de inicio -->
    <section id="inicio-section">
        <header class="bg-primary text-white text-center py-5">
            <h1>¡Hola! Soy Álvaro</h1>
            <p>Bienvenido a mi carta de visita</p>
        </header>

        <section class="my-5">
            <h2 class="text-center">Sobre Mí</h2>
            <p class="text-center">Soy un profesional con formación en la Administración de Sistemas Informáticos en
                Red, habiendo estudiado en Cuatrovientos Centro Integrado. Me apasiona la ciberseguridad, la lectura
                de Ciencia Ficción y Fantasía, y el desarrollo de proyectos.</p>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <h2 class="text-center">Mi Formación</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Educación</h3>
                        <ul>
                            <li>Administración de Sistemas Informáticos en Red - Cuatrovientos Centro Integrado</li>
                            <li>Bachillerato Tecnológico Científico - Jesuitas Pamplona</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3>Experiencia</h3>
                        <ul>
                            <li>Telefonista en Saltoki</li>
                            <li>Gestor de Almacén en Fontanería y Climatización Navarra</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="text-center">Intereses</h2>
            <p class="text-center">Me interesan la ciberseguridad, la programación y la tecnología. En mi tiempo
                libre disfruto de leer libros de ciencia ficción y practicar deportes al aire libre.</p>
        </section>
    </section>

    <div class="container my-5" id="main-content">
        <!-- Sección de proyectos -->
        <section id="proyectos-section" class="container my-5">
            <h2 class="text-center">Mis Proyectos</h2>

            <!-- Caja de búsqueda -->
            <div class="mb-4">
                <input type="text" class="form-control" id="buscador" placeholder="Buscar por título de proyecto">
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 my-4" id="proyectos-lista">
                <?php
                    $consulta = "SELECT * FROM proyectos";
                    $resultado = $conexion->query($consulta);

                    if ($resultado->num_rows > 0) {
                        while($fila = $resultado->fetch_assoc()) {
                            $id = $fila['ID'];
                            $titulo = $fila['TÍTULO'];
                            $descripcion = $fila['DESCRIPCIÓN'];
                            $imagen_url = $fila['ENLACE_IMAGEN'];

                            echo "
                            <div class='col proyecto-item'>
                                <div class='card'>
                                    <img src='$imagen_url' class='card-img-top' alt='$titulo' style='height: 150px; object-fit: cover;'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$titulo</h5>
                                        <p class='card-text'>". substr($descripcion, 0, 100) . "...</p>
                                        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalProyecto$id'>
                                            Más información
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal para Proyecto $id -->
                            <div class='modal fade' id='modalProyecto$id' tabindex='-1' aria-labelledby='modalProyecto{$id}Label' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='modalProyecto{$id}Label'>$titulo</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body'>
                                            $descripcion
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    } else {
                        echo "No hay proyectos para mostrar.";
                    }
                ?>
            </div>
        </section>

        <!-- Formulario de inserción de proyectos -->
        <section id="formulario-section" class="container my-5">
            <h2 class="text-center">Insertar Proyecto</h2>
            <form id="formProyecto" method="POST">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Enlace de la Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Proyecto</button>
            </form>
        </section>

        <!-- Sección de contacto -->
        <section id="contacto-section" class="my-5">
            <h2 class="text-center">Contacto</h2>
            <form id="contactForm" class="my-4">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">Por favor, introduce un correo válido.</div>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="3" required></textarea>
                    <div class="invalid-feedback">Por favor, escribe un mensaje.</div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Álvaro. Todos los derechos reservados. Contacto: <a href="mailto:tuemail@correo.com" class="text-white">alvaro0711sanchez@gmail.com</a></p>
    </footer>

    <!-- Enlace a Bootstrap JS y jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // Funcionalidad de búsqueda dinámica
            $('#buscador').on('input', function() {
                var searchTerm = $(this).val().toLowerCase();
                
                $('#proyectos-lista .proyecto-item').each(function() {
                    var titulo = $(this).find('.card-title').text().toLowerCase();
                    if (titulo.indexOf(searchTerm) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Enviar formulario sin recargar la página
            $('#formProyecto').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '',
                    data: $(this).serialize(),
                    success: function (response) {
                        alert('Proyecto insertado correctamente');
                        location.reload(); // Recargar la página para mostrar el nuevo proyecto
                    },
                    error: function () {
                        alert('Error al insertar el proyecto');
                    }
                });
            });
        });
    </script>
</body>

</html>

