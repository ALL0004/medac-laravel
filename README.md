 Se comentan los pasos realizados desde descargar desde GitHub los ficheros que se han proporcionado comprimidos hasta poder
acceder a las vistas en el navegador *

# Git:
	- git init
	- git remote add origin https://github.com/ALL0004/medac-laravel
	- git pull origin master

Instalar el paquete vendor y todas las dependencias (asumiendo que composer está instalado):
	composer install
	npm install (puede no ser necesario)

!!Es posible que haya que configurar la variable del sistema para la carpeta php de xampp

Crear un fichero de variables de entorno para las credenciales de Laravel
	cp .\.env.example /.env

Generar la clave de Laravel.
	php artisan key:generate



...Detalles del proyecto

# Vista:

Creación
	composer create-project --prefer-dist laravel/laravel medac-laravel

Usados componentes en blade para header y footer
	php artisan make:component header
	php artisan make:component footer
Importar componentes
	<x-header/>
	<x-footer/>
Bucles
	Usados en la generación de filas de las tablas
Estructuras de control	
	Usados para mostrar el boton de fichaje de salida o de entrada(sin desarollar la condición, se puede comprobar con true/false)

# Modelo:

## Migraciones
	php artisan make:migration create_usuarios_table
	php artisan make:migration create_sedes_table
	php artisan make:migration create_asistencias_table

## Migrar a phpmyadmin

	php artisan migrate

** Hemos modificado la fecha de creación de las tablas para que se creen primero aquellas sin dependencia


# Modelo
	-crear Modelo
		(php artisan make:model CentroModel)
	-crear Factoria
		(php artisan make:factory CentroFactory --model=CentroModel)
	-crear Seeder
		(php artisan make:seed CentrosSeeder)
	-Establecer datos de prueba
		(php artisan migrate:refresh --seed)


# Controlador
	
  - php artisan make::controller (nombre del controlador) --resource
		(php artisan make:controller CentroController --resource)
  - Importamos el modelo, generamos el constructor. (__construct)
  		(genera un crud en controlador del tiron)
  - Creamos una carpeta en vistas por cada tabla de nuestro modelo, y dentro una lista.blade.php donde mostramos todos los datos de cada fila
  - Generamos dos vistas mas, con formularios para el create y update de cada tabla
  - Enlazamos las rutas entre las funciones del controlador, las vistas generales del modelo y las funciones del CRUD.	
