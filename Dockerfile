###############
# php-fpm(ptx-app)
###############

FROM eeis.jp:5005/eam/php-expt/php82-master AS ptx-app

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

RUN apk add git && \
    composer config -g process-timeout 3600 && \
    composer config -g repos.packagist composer https://packagist.org

ADD ./app /work/app

RUN cd /work/app && composer install --optimize-autoloader --no-dev

WORKDIR /work/app
