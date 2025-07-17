# استخدم PHP الرسمي
FROM php:8.2-fpm

# ثبّت PostgreSQL + أدوات أخرى ضرورية
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    zip \
    && docker-php-ext-install pdo pdo_pgsql

# ثبّت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ المشروع
WORKDIR /var/www
COPY . .

# ثبّت الحزم
RUN composer install --no-dev --optimize-autoloader

# صلاحيات
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# منفذ Laravel
EXPOSE 8080

# تشغيل Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
