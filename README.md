STACK
============================================
* PHP -version 8.0
* Laravel -version 8.4
* MySQL -version 8.0
* Composer -version 2.0.14

INSTALL
============================================
Install docker and docker-compose
Go to folder project

**On Linux:**
   
Run: sh redeploy.sh

**On Windows:**

Run:

docker-compose up -d --force-recreate --build

docker-compose exec php /bin/bash -c "cd /var/www/html && composer install --no-interaction"

docker-compose exec php /bin/bash -c "cd /var/www/html && php artisan migrate:refresh"

docker-compose exec php /bin/bash -c "cd /var/www/html && php artisan parse:file"

Links
============================================
http://127.0.0.1/api/doc - to Swagger
