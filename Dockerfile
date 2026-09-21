FROM php:8.2-apache
WORKDIR /var/www/html
# データベース接続用の拡張機能をインストール
RUN docker-php-ext-install pdo pdo_mysql mysqli

# .htaccess等を使うためのモジュール有効化
RUN a2enmod rewrite
