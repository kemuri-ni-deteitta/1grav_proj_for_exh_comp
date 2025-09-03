FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

# Установка системных пакетов и зависимостей для Grav
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    ca-certificates curl unzip git \
    nginx supervisor \
    php8.1-fpm php8.1-cli \
    php8.1-gd php8.1-xml php8.1-mbstring php8.1-curl php8.1-zip php8.1-apcu php8.1-intl php8.1-opcache \
 && rm -rf /var/lib/apt/lists/*

# Конфигурация PHP и php-fpm
COPY php.ini /etc/php/8.1/fpm/conf.d/99-overrides.ini
COPY docker/php-fpm.conf /etc/php/8.1/fpm/php-fpm.conf

# Конфигурация Nginx и Supervisor
COPY docker/nginx.conf /etc/nginx/sites-available/default
COPY docker/supervisord.conf /etc/supervisor/conf.d/grav.conf

# Создание необходимых директорий и установка прав (частично)
RUN mkdir -p /run/php /var/www/certbot \
 && mkdir -p /var/www/html/tmp /var/www/html/backup \
 && chmod -R 775 /var/www/html/cache /var/www/html/logs /var/www/html/images /var/www/html/tmp /var/www/html/backup || true

EXPOSE 80 443
STOPSIGNAL SIGTERM

# Запуск Supervisor (он управляет php-fpm и nginx)
CMD ["/usr/bin/supervisord", "-n"]
