FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN chown -R application:application /app/storage /app/bootstrap/cache

ENV WEB_DOCUMENT_ROOT=/app/public

EXPOSE 8080