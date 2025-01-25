FROM php:8.3-fpm

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    bash-completion \
    libpq-dev

# Установка PHP расширений
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создаем пользователя и группу www
ARG USER_ID=1000
ARG GROUP_ID=1000

RUN groupadd -g ${GROUP_ID} www && \
    useradd -u ${USER_ID} -g www -s /bin/bash -m www

WORKDIR /var/www

# Копируем и делаем исполняемым entrypoint скрипт
COPY docker/entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

# Меняем владельца директории
RUN chown -R www:www /var/www

RUN chsh -s /bin/bash www

# Переключаемся на пользователя www
USER www

# Запускаем entrypoint скрипт
ENTRYPOINT ["entrypoint.sh"]
