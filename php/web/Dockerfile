FROM php:8.0-apache AS dev

RUN apt-get update
RUN apt-get install -y git zip unzip

RUN a2enmod rewrite
COPY ./config/php.ini /usr/local/etc/php/conf.d/php.dev.ini

RUN cd /tmp && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
php composer-setup.php && \
php -r "unlink('composer-setup.php');"

RUN cd /tmp && curl -L https://github.com/sass/dart-sass/releases/download/1.14.1/dart-sass-1.14.1-linux-x64.tar.gz --output sass.tar.gz && \
tar xvf sass.tar.gz && \
ln -s /tmp/dart-sass/sass /bin/sass && \
rm -f sass.tar.gz

RUN ln -s /tmp/composer.phar /bin/composer
RUN cd /var/www/html/

FROM dev AS prod

RUN rm -rf /var/www/dist
WORKDIR /var/www/dist

COPY . /var/www/dist
RUN composer install -vv && sass gui/scss:gui/css

RUN find . -name '.htaccess' -delete && \
    find . -name 'config.json' -delete && \
    find . -name '*.docker.*' -delete && \
    find . -name 'composer.*' -delete && \
    find . -name 'Dockerfile' -delete && \
    find . -name 'php.ini' -delete && \
    mv config/.prod.config.php config/config.php && \
    mv config/.prod.htaccess .htaccess && \
    rm -rf php/web/gui/scss
