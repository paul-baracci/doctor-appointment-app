# Doctor Appointment Application using Laravel 8

## Installation

### Dependencies `docker` `docker-compose` `npm`

- Clone this repository (you might want to do it in your ~/www/ dir):

`git clone https://github.com/paul-baracci/doctor-appointment-app.git`

- cd into the new directory

`cd doctor-appointment-app/`

- Edit the `docker-compose.yml.example` file, rename it to `docker-conpose.yml` then move it to `/.docker/docker-compose/`)

```
version: "0"
services:
  project-db:
    image: mariadb:10.5
    container_name: project-db
    volumes:
      - "/path/to/your/app-folder/.docker/docker-compose/database/data:/var/lib/mysql"
      - "/path/to/your/app-folder/.docker/docker-compose/database/config:/etc/mysql/conf.d"
    ports:
      - "3386:3306"
    environment:
      - MYSQL_ROOT_PASSWORD=
    networks:
      - project-network
    restart: unless-stopped

  project-app:
    image: amoraresco/it-academy-project:latest
    container_name: project-app
    links:
      - project-db
      - project-redis
    ports:
      - "880:80"
      - "882:22"
    volumes:
      - "/path/to/your/app-folder/laravel/:/var/www/html"
    environment:
      - APP_URL=http://website.com
      - MAIL_HOST=project-mailhog
      - MAIL_USERNAME=null
      - MAIL_PASSWORD=null
      - MAIL_ENCRYPTION=null
      - MAIL_PORT=1025
      - MAIL_FROM_ADDRESS=email@test.com
      - MAIL_NAME="PHR API"
      - MAIL_DELAY=2500
      - DB_HOST=project-db
      - DB_DATABASE=project_database
      - DB_USERNAME=root
      - DB_PASSWORD=
      - DB_PORT=3306
    networks:
      - project-network
    restart: unless-stopped

  project-mailhog:
    image: mailhog/mailhog
    container_name: project-mailhog
    ports:
      - "8825:8025"
      - "8125:1025"
    networks:
      - project-network

  project-redis:
    image: redis:3.0
    container_name: project-redis
    volumes:
      - "/path/to/your/app-folder/.docker/docker-compose/redis/cache/data:/data"
    ports:
      - "8379:6379"
    restart: unless-stopped
    networks:
      - project-network

networks:
  project-network:
    driver: bridge
```

Replace the paths and ports:

```
All instances of /path/to/your/app-folder/ should be replaced with your app/project folder
```

- Initialize containers

`docker-compose .docker/docker-compose/ up`

- Create a sql database in the `.docker/docker-compose/database/data` directory. Make sure the name matches your .env

- Enter the project-app container

`docker exec -it project-app bash`

- Install required composer packages

 `composer install`
