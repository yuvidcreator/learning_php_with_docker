#!/bin/bash

# Colors for status messages
GREEN='\033[0;32m'
NC='\033[0m' # No Color


# # Start a container
# echo -e "${GREEN}📦 PHP Docker container started...${NC}"
# # docker run -it --rm -v $PWD:/app php-app

# All changes in your ./src/ directory on your host machine (Mac/linux/Window) 
# are live-mounted into the running container at /var/www/app.
# Just Runs index.php inside the running PHP-FPM-docker container
docker exec -it php_app_learning_local php /var/www/app/index.php

