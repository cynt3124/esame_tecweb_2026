//Clonare il repository

git clone https://bitbucket.org/christine312/esame_tecweb_2026.git
cd esame_tecweb_2026

//Installare le dipendenze

composer install
npm install

//Creare il file .env

cp .env.example .env
php artisan key:generate

//Avviare il server Laravel

php artisan serve

//Avviare Vite

npm run dev

//Struttura del progetto :

routes/web.php — definizione delle rotte
app/Http/Controllers/ — controller dell’applicazione
resources/views/ — viste Blade
public/ — assets pubblici
resources/js e resources/css — gestiti da Vite