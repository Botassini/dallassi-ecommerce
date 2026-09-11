#!/usr/bin/env bash
# Encerra o script se houver erro
set -o errexit

composer install --no-dev --optimize-autoloader
npm install
npm run build
php artisan config:clear
php artisan route:cache
php artisan view:cache
php artisan migrate --force
