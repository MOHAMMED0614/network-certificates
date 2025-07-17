# استخدم صورة PHP الرسمية مع Composer
FROM php:8.2-fpm

# تثبيت المتطلبات
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ المشروع داخل الحاوية
WORKDIR /var/www
COPY . .

# تثبيت البكجات
RUN composer install --no-dev --optimize-autoloader

# إعداد الصلاحيات
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# ضبط منفذ Laravel
EXPOSE 8000

# أمر التشغيل
CMD php artisan serve --host=0.0.0.0 --port=8000
