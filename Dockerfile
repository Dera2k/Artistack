# ---------- Stage 1: Build frontend ----------
FROM node:22 AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

# ---------- Stage 2: PHP ----------
FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . .

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Copy built Vite assets
COPY --from=frontend /app/public/build ./public/build

ENV WEB_DOCUMENT_ROOT=/app/public

# Ensure Laravel runtime directories exist
RUN mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache && \
    chown -R application:application storage bootstrap/cache

EXPOSE 8080