# Sử dụng image PHP chính thức
FROM php:8.2-fpm

# Cài đặt các tiện ích cần thiết
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tạo và thiết lập thư mục làm việc
WORKDIR /var/www

# Copy mã nguồn vào container
COPY . .

# Cài đặt các gói PHP và Node.js
RUN composer install --no-dev --optimize-autoloader
RUN npm install

# Thiết lập quyền cho thư mục storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 9000 cho PHP-FPM và 3000 cho Vite
EXPOSE 9000 3000

# CMD cho PHP-FPM và Vite
CMD ["sh", "-c", "php-fpm & npm run dev"]