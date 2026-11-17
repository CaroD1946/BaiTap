FROM php:8.2-apache

# Cài đặt các extension PHP cần thiết cho Laravel (PDO, MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Kích hoạt module rewrite của Apache
RUN a2enmod rewrite

# Cấu hình DocumentRoot và quyền hạn
WORKDIR /var/www/html
COPY . /var/www/html/

# Cấu hình quyền ghi cho storage và cache của các bài
RUN chmod -R 777 /var/www/html/Bai*/storage /var/www/html/Bai*/bootstrap/cache 2>/dev/null || true

# Thiết lập Apache lắng nghe cổng $PORT của Render (mặc định Render cấp biến $PORT)
CMD sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf && \
    sed -i "s/:80/:${PORT:-80}/g" /etc/apache2/sites-available/000-default.conf && \
    apache2-foreground
