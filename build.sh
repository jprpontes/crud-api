composer install
cp .env.example .env
php artisan key:generate
git submodule init
git submodule update
cp laradock.env laradock/.env
cd laradock
sudo docker-compose up -d nginx mysql mongo
