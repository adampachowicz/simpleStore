uzupełnij plik env 

podaj dane do bazy np: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simplyStore
DB_USERNAME=root
DB_PASSWORD=root

zainstaluje composer zależności
composer install

aby uruchomic
php artisan migrate
php artisan serve

opcjonalnie fakowa baza danych

php artisan db:seed