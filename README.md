# Taller Calidad de Software - MuscleHub

**MuscleHub** es una aplicación web desarrollada como proyecto academico en el marco de la competencia de Calidad de Software en **Laravel 12** que permite la gestión de un gimnasio a través de un panel de administración.  
Incluye autenticación de usuarios, control de roles (Administrador y Usuario), y CRUDs completos para **Categorías** y **Productos**.

---

## Características principales

-  Sistema de **login y registro** con roles (`admin` y `usuario`).
-  **Panel de administrador** con acceso a:
  - Gestión de **categorías** (crear, editar, eliminar, listar)
  - Gestión de **productos** con imagen, stock y estado
-  Interfaz limpia y responsiva con **Bootstrap 5**
-  Base de datos en **MYSQL**
-  Arquitectura organizada siguiendo las buenas prácticas de Laravel

---

##  Tecnologías utilizadas

| Tipo | Herramienta |
|------|--------------|
| Framework | Laravel 12 |
| Frontend | Blade + Bootstrap 5 |
| Base de datos | SQLite / MySQL |
| Autenticación | Laravel Breeze |
| Control de versiones | Git y GitHub |

---

##  Instalación y configuración

### Clonar el repositorio

git clone https://github.com/JaiderRJ/MuscleHub-Laravel.git
cd MuscleHub-Laravel

### Instalar dependencias de PHP
 composer install
### Instalar dependencias de Node (opcional, si usas frontend compilado)
**npm install**  &&   **npm run dev**
### Crear archivo .env
Copia el archivo de ejemplo y configura tus credenciales:
**cp .env.example .env** 
### Generar la clave de la app
**php artisan key:generate** 
### Crear y ejecutar las migraciones
**php artisan migrate**
### Iniciar el servidor local 
**php artisan serve**
## Roles de usuario

| Rol           | Descripción                                                                 |
|----------------|------------------------------------------------------------------------------|
| **Administrador** | Puede acceder al dashboard y gestionar categorías y productos.               |
| **Usuario**        | Puede ver el contenido general del sitio.                                 |

---
## Autor  

Desarrollado con ❤️ por **Jaider Rodríguez**  
-
---
## Licencia  

Este proyecto es de uso libre con fines educativos.  
Puedes modificarlo y adaptarlo para tus propios proyectos.  
