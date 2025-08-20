FROM php:8.3-fpm

# Set non-root user for security
ARG USER=phpuser
ARG UID=1000
ARG GID=1000

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip zip curl nano bash \
    libzip-dev libpng-dev libjpeg-dev libwebp-dev libxpm-dev libfreetype6-dev \
    libxml2-dev libonig-dev libicu-dev libbz2-dev \
    libsqlite3-dev libreadline-dev libssl-dev \
    && docker-php-ext-install -j$(nproc) \
        pdo pdo_mysql zip opcache intl bcmath gd sockets \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Create non-root user
RUN groupadd -g ${GID} ${USER} && \
    useradd -u ${UID} -g ${GID} -s /bin/bash -m ${USER}

# Set working directory
WORKDIR /var/www/app

# Copy src/ to container workdir
COPY ./src/ .

# Copy environment and PHP configs
COPY ./.env .
COPY ./Docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Remove mistakenly created src/logs & src/output if they exist
RUN rm -rf ./logs ./output

# Recreate correct folders in container
RUN mkdir -p /var/www/logs /var/www/output && \
    chmod -R 777 /var/www/logs /var/www/output

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PhpSpreadsheet
RUN composer require phpoffice/phpspreadsheet mpdf/mpdf setasign/fpdi-fpdf

# Switch to non-root user
USER ${USER}

# Expose PHP-FPM port
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
