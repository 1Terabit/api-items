\# Backend API de Gestión de Items

API REST desarrollada en Laravel para la gestión de items.

\## Requisitos Previos

-   PHP >= 8.1
-   Composer
-   MySQL - MAMP - PHPMYADMIN
-   Node.js y npm

\## Instalación

1. Clonar el repositorio

\```bash

git clone <url-del-repositorio>

cd backend-laravel

Instalar dependencias de PHP

Copiar

composer install

Configurar el archivo .env

Copiar

cp .env.example .env

\# Editar .env con tus credenciales de base de datos

Generar clave de aplicación

Copiar

php artisan key:generate

Ejecutar migraciones

Copiar

php artisan migrate

Iniciar el servidor

Copiar

php artisan serve

El servidor estará disponible en http://localhost:8000

Estructura del Proyecto

app/Http/Controllers - Controladores de la aplicación

app/Models - Modelos de datos

database/migrations - Migraciones de base de datos

routes/api.php - Definición de rutas API

Configuración

Base de Datos

Configura tu archivo .env:

Copiar

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=nombre_db

DB_USERNAME=tu_usuario

DB_PASSWORD=tu_contraseña

Endpoints API

Items

GET /api/items - Obtener todos los items

GET /api/items/{id} - Obtener un item específico

POST /api/items - Crear nuevo item

PUT /api/items/{id} - Actualizar item existente

DELETE /api/items/{id} - Eliminar item

Solución de Problemas Comunes

Error de permisos: chmod -R 777 storage bootstrap/cache

Error de base de datos: Verificar credenciales en .env

Error de CORS: Revisar configuración en config/cors.php

Licencia

MIT

\```
