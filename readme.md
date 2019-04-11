<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



 <b>
  Dentro de la carpeta raíz del proyecto:</b>

<p>
           $ composer install

</p>

De esta forma se instalarán todas las dependencias necesarias para el proyecto que fueron definidas en el archivo composer.json durante el desarrollo.


<b>Archivo de configuración de Laravel</b>



Cada nuevo proyecto con Laravel, por defecto tiene un archivo .env con los datos de configuración necesarios para el mismo, cuando utilizamos un sistema de control de versiones como git, este archivo se excluye del repositorio por medidas de seguridad .


Sin embargo  existe un archivo llamado .env.example que es un ejemplo de como crear un el archivo de configuración, podemos copiar este archivo desde la consola con:


            cp .env.example .env


De esta forma ya tenemos el archivo de configuración de nuestro proyecto.


Creando un nuevo API key
Por medidas de seguridad cada proyecto de Laravel cuenta con una clave única que se crea en el archivo .env al iniciar el proyecto. En caso de que el desarrollador no te haya proporcionado están información, puedes generar una nueva API key desde la consola usando:


            $php artisan key:generate




<b>Base de datos y migraciones</b>


Por lo general las bases de datos en los proyectos de Laravel se crean haciendo uso de las migraciones.

Primero debes agregar las credenciales al archivo .env

   DB_HOST=localhost
   DB_DATABASE=tu_base_de_datos
   DB_USERNAME=root
   DB_PASSWORD=





<b>Finalmente estarás habilitado para ejecutar la migración desde la consola usando artisan</b>

         $php artisan migrate 



<b>Para agregar los seeders de la base de datos</b>


         $php artisan migrate --seed




<b>Para ingresar a la web:</b>

         127.0.0.1/localhost/login



<b>Credenciales:</b>

usuario=admin@outlook.com
clave=admin123456789
