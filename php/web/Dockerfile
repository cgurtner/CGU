FROM php:7.3-apache

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