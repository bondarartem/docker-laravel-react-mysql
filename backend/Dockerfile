FROM ubuntu
ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Set working directory
WORKDIR /var/www/html

# Install dependencies for the operating system software
RUN apt-get update && apt-get install -y \
    php7.4 \
    apache2 \
    nano

#PECL
RUN apt-get install -y php-pear php-dev \
                       memcached php-memcached \
                       php-soap \
                       php-curl

#LARAVEL LIB
RUN apt-get install -y libgd-dev php-gd \
                       libzip-dev php-zip \
                       zip unzip \
                       php-mbstring php-memcache \
                       php7.4-mysql


COPY ./config/php.ini /usr/local/etc/php/conf.d/
COPY ./config/apache-local.conf /etc/apache2/sites-available/000-default.conf

# Install composer (php package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./config/service/ /service/
RUN chmod -R 777 /service

CMD ["/service/start.sh"]