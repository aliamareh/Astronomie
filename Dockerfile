FROM php:8-fpm-alpine3.14

# installation bash
RUN apk --no-cache update && apk --no-cache add bash git npm\
&& git config --global user.email "ali-houssein.amareh@univ-orleans.fr" \
&& git config --global user.name "Amareh Ali Houssein"

# installation de composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
&& php composer-setup.php --install-dir=/usr/local/bin \
&& php -r "unlink('composer-setup.php');"

RUN docker-php-ext-install pdo pdo_mysql

# installation de symfony
RUN wget https://get.symfony.com/cli/installer -O - | bash \
&& mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html
