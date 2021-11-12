composer install
cp .env.example .env
php artisan key:generate
git submodule init
git submodule update
