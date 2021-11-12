cp .env.example .env
php artisan key:generate
cp laradock.env laradock/.env
cd laradock
sudo docker-compose up -d nginx mysql mongo
php artisan migrate --seed
