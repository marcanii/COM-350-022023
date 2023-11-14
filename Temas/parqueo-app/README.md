<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## instalar

clonar el repositorio
composer install 

# Crea modelo, migracion controlador,recurso, factory y seeder
php artisan make:model Cliente -mcrfs

# archivo de configuracion es config\app.php
se define el idioma
es para el idioma y paralo sfaker es_PE

#crear las tablas y poblarlas
 php artisan migrate --seed
# crear tablas y poblarlas borrando todo
 php artisan migrate:fresh --seed

 # Ejecutar LAravel
  php atisan serve

  # instalar tailwind
  npm install tailwindcss
  # inicializarlo
  npx tailwindcss init

  # crear sistema de autenticacion
  composer require laravel/breeze --dev
  php artisan breeze:install
 
php artisan migrate
npm install
npm run dev

#instalar soporte a  idiomas
php artisan lang
