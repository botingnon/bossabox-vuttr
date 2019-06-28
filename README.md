docker-compose build
docker exec bossabox-vuttr composer install
docker-compose up
docker exec bossabox-vuttr composer test