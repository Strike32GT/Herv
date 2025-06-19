![Logo de Herv](IMAGENES/logo.png)
# HERV 

Aplicación Web de Orientación Vocacional basada en Habilidades

---

## Descripción General

Esta es una aplicación web desarrollada con **PHP**, **HTML5**, **CSS3** y **JavaScript**, diseñada para ayudar a las personas a registrar sus **habilidades personales** y, en base a ellas, recibir **recomendaciones de carreras universitarias** alineadas con su perfil. 

La plataforma utiliza **XAMPP** como servidor local y se conecta a una base de datos **MySQL** mediante **PDO**, garantizando seguridad y eficiencia en el manejo de datos.


---

## Características Principales

- Registro y gestión de usuarios
- Ingreso y administración de habilidades personales
- Recomendación de carreras universitarias según habilidades registradas
- Módulo de convenios con instituciones educativas
- Asesoría vocacional personalizada para los usuarios
- Interfaz intuitiva, moderna y responsiva
- Seguridad en el acceso y gestión de datos (uso de PDO)
- Panel de administración para supervisar y gestionar el sistema

---

## Tecnologías Utilizadas

| Tecnología   | Logo |
|--------------|------|
| PHP          | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) |
| MySQL        | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) |
| HTML5        | ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) |
| CSS3         | ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) |
| JavaScript   | ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) |
| XAMPP        | ![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white) |

---

## Estructura de Carpetas

```
/Conexion         # Archivos de conexión a la base de datos
/Modelo           # Modelos de datos y entidades
/Metodos          # Métodos y funciones reutilizables
/CSS              # Hojas de estilo
/IMAGENES         # Recursos gráficos e imágenes
/JAVASCRIPT       # Scripts JS
/Layout           # Plantillas y layouts generales
/Aplic_Web        # Módulos principales:
    /Habilidad
    /Convenio
    /Usuario
    /Empleado_Asesoria
/WEB              # Interfaz de usuario principal
/WEB_ADMIN        # Panel de administración
```

---

## Instalación y Ejecución con XAMPP

1. **Descarga e instala [XAMPP](https://www.apachefriends.org/index.html).**
2. Clona o descarga este repositorio en la carpeta `htdocs` de XAMPP.
3. Crea una base de datos MySQL e importa el archivo SQL proporcionado en `/Conexion` o `/Modelo`.
4. Configura los parámetros de conexión en el archivo correspondiente dentro de `/Conexion`.
5. Inicia los servicios de Apache y MySQL desde el panel de XAMPP.
6. Accede a la aplicación desde tu navegador en `http://localhost/NombreDelProyecto`.

---

## Guía Rápida de Uso

1. Ingresa con tus credenciales de usuario.
2. Navega por los módulos disponibles desde el menú principal.
3. Administra habilidades, convenios, usuarios y asesorías según tus permisos.
4. Utiliza el panel de administración para configuraciones avanzadas.

---

## Capturas de Pantalla

> _Ejemplo de imágenes, reemplaza por tus propias capturas_

![Pantalla de inicio](Capturas/WindowsUser.png)
![Panel de administración](https://via.placeholder.com/800x400?text=Panel+de+Administraci%C3%B3n)

---

## Créditos y Autor

- **Autor:** [Fernando Mas and Ximena Chumbirayco]
- **Contacto 1:** [roberto.mas@tecsup.edu.pe]
- **Contacto 2:** [ximena.chumbirayco@tecsup.edu.pe]

---

## Licencia

Este proyecto está licenciado bajo la licencia [MIT](LICENSE).
