echo Uploading Application container
docker-compose up -d

echo Copying the configuration example file
docker exec -it pokemon-consume-app cp .env.example .env

echo Install dependencies
docker exec -it pokemon-consume-app composer install

echo Information of new containers
docker ps -a
