# Sistema de Gestión de Usuarios y Autenticación

Este proyecto es un sistema básico de gestión de usuarios que incluye funcionalidades de registro e inicio de sesión. La autenticación se maneja con JSON Web Tokens (JWT), y está desarrollado en PHP para el backend y Angular en el frontend.

## Características

- **Registro de usuarios:** Permite crear nuevas cuentas de usuario.
- **Inicio de sesión:** Autenticación de usuarios mediante credenciales y generación de un token JWT.
- **Autenticación JWT:** Protección de rutas y recursos usando JWT para usuarios autenticados.
- **CRUD de usuarios:** Operaciones básicas para usuarios (Crear, Leer, Actualizar, Eliminar).
- **Rutas protegidas:** Se protegen ciertas rutas, accesibles solo para usuarios autenticados.

## Tecnologías Utilizadas

- **PHP:** Lenguaje del backend que maneja la lógica del sistema y la autenticación.
- **MySQL:** Base de datos para almacenar la información de los usuarios.
- **Angular:** Framework de frontend para construir la interfaz de usuario.
- **JWT (JSON Web Token):** Método para autenticar usuarios y proteger rutas.
- **Bootstrap:** Framework de CSS para el diseño y estilos del frontend.

## Estructura del Proyecto

El sistema está dividido en dos partes principales:

1. **Backend en PHP:** Maneja la autenticación, creación de usuarios y otras operaciones de backend.
   - **Archivos principales:**
     - `index.php`: Archivo principal de la API.
     - `auth.php`: Módulo para el manejo de la autenticación.
     - `user.php`: Controlador de usuario con operaciones CRUD.
     - `config/database.php`: Configuración de la base de datos.
     - `middleware/jwtMiddleware.php`: Middleware para proteger las rutas con JWT.

2. **Frontend en Angular:** Interfaz de usuario que permite la interacción con el sistema.
   - Componentes principales:
     - `login.component.ts`: Componente para inicio de sesión.
     - `register.component.ts`: Componente para el registro de usuarios.
     - `user-list.component.ts`: Componente para la visualización y gestión de usuarios.
     - `auth.service.ts`: Servicio que gestiona la autenticación y la manipulación de JWT.

## Instalación

### Requisitos previos
- PHP >= 8.0
- Composer
- MySQL
- Node.js y Angular CLI (para el frontend)

### Pasos

