# Mi Página Personal Mejorada

## Descripción

Esta versión mejorada de mi página web personal utiliza PHP y MySQL para generar contenido dinámico. A través de la base de datos, los proyectos se almacenan y se recuperan automáticamente para ser mostrados en la página, lo que facilita la gestión de contenidos sin necesidad de modificar el HTML directamente. Además, he implementado funcionalidades como la inserción de nuevos proyectos mediante un formulario en el backend.

## Contenido

- [Descripción](#descripción)
- [Características](#características)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Instalación](#instalación)
- [Uso](#uso)
- [Contribuciones](#contribuciones)
- [Contacto](#contacto)

## Características

- **Generación Dinámica de Proyectos**: Los proyectos se almacenan en una base de datos MySQL y se muestran de forma dinámica utilizando PHP.
- **Facilidad de Actualización**: Los proyectos pueden ser añadidos de manera sencilla desde un formulario, que inserta los datos directamente en la base de datos.
- **Búsqueda Dinámica de Proyectos**: Implementada una caja de búsqueda que permite filtrar los proyectos por título.
- **Interactividad Mejorada**: Modal de detalles de proyectos para mostrar información adicional sin recargar la página.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación utilizado para interactuar con la base de datos y generar contenido HTML dinámico.
- **MySQL**: Sistema de gestión de bases de datos relacional utilizado para almacenar la información de los proyectos.
- **HTML5 y CSS**: Estructura y diseño de la página web.
- **Bootstrap**: Framework CSS para facilitar el diseño responsivo y la interactividad.
- **jQuery**: Biblioteca de JavaScript utilizada para funcionalidades como la búsqueda dinámica y la inserción de proyectos sin recargar la página.
- **XAMPP**: Entorno de servidor local utilizado para ejecutar Apache y MySQL.

## Instalación

### Requisitos Previos

- **XAMPP**: Asegúrate de tener instalado XAMPP con Apache y MySQL activos.
- **Base de Datos**: La base de datos debe estar configurada con el nombre `pagina2` y debe contener una tabla `proyectos` con las siguientes columnas:
  - `ID` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `TÍTULO` (VARCHAR 100)
  - `DESCRIPCIÓN` (TEXT)
  - `ENLACE_IMAGEN` (VARCHAR 255)

### Pasos de Instalación

1. **Instalar XAMPP**:
   - Descarga e instala [XAMPP](https://www.apachefriends.org/es/index.html) si no lo tienes.
   - Asegúrate de que Apache y MySQL estén corriendo.

2. **Configurar la Base de Datos**:
   - Accede a `phpMyAdmin` a través de `http://localhost/phpmyadmin/` en tu navegador.
   - Crea una nueva base de datos llamada `pagina2`.
   - Crea una tabla `proyectos` con los campos mencionados anteriormente.

3. **Subir Archivos al Servidor**:
   - Copia los archivos del proyecto en la carpeta `htdocs` de tu instalación de XAMPP (por ejemplo: `C:\xampp\htdocs\mi-pagina`).

4. **Acceder a la Página**:
   - Abre tu navegador y accede a `http://localhost/mi-pagina` para ver la página en funcionamiento.

## Uso

Una vez que la página esté funcionando, puedes:

- **Añadir proyectos**: Utiliza el formulario en la sección "Insertar Proyecto" para añadir nuevos proyectos. Estos se almacenarán en la base de datos y se mostrarán automáticamente en la página de proyectos.
- **Buscar proyectos**: Utiliza la caja de búsqueda para filtrar los proyectos por título.
- **Ver detalles**: Haz clic en "Más información" en cualquier proyecto para ver su descripción completa en un modal emergente.

## Contacto

Si tienes alguna pregunta o sugerencia, puedes contactarme en:

- Correo electrónico: [alvaro0711sanchez@gmail.com](mailto:alvaro0711sanchez@gmail.com)
- GitHub: [github.com/Charletas576](https://github.com/Charletas576)
