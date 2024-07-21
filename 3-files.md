# Archivo `index.php` en WordPress

El archivo principal de entrada para todas las solicitudes web a tu sitio de WordPress. Por lo general, no necesitas editar este archivo.

# Archivo `wp-config-sample.php` en WordPress

El archivo `wp-config-sample.php` en WordPress es un archivo de configuración de muestra que se utiliza como plantilla para crear el archivo de configuración principal de WordPress, denominado `wp-config.php`. Este archivo contiene los detalles de configuración necesarios para que WordPress se conecte a la base de datos y funcione correctamente. A continuación se describen las principales configuraciones y su propósito:

## Información de la base de datos

```php
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');
```

$table_prefix = 'wp_';
