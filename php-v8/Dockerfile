ARG V8=latest

FROM libv8:${V8}

ARG PHP=7.2
ARG PHP_V8=master

ENV DEBIAN_FRONTEND noninteractive
ENV TERM=xterm-256color
ENV LC_ALL=C.UTF-8
ENV NO_INTERACTION=1
ENV REPORT_EXIT_STATUS=1

ENV PHP ${PHP}

RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu xenial main" > /etc/apt/sources.list.d/ondrej-php-xenial.list && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C && \
    apt-get update && \
    apt-get install -y valgrind git && \
    apt-get install -y php${PHP} php${PHP}-cli php${PHP}-dev php${PHP}-fpm && \
    rm -rf /var/lib/apt/lists/* && \
    echo 'variables_order = "EGPCS"' >> `php --ini | grep "Loaded Configuration File" | awk '{print $4}'` && \
    php -i && \
    php-config || true

COPY v8.ini /etc/php/${PHP}/mods-available/v8.ini
RUN git clone https://github.com/phpv8/php-v8.git && \
    cd php-v8 && \
    git checkout ${PHP_V8} && \
    phpize && ./configure && make && make test && make install && \
    phpenmod v8 && \
    cd .. && rm -rf php-v8

COPY test.php /test.php
RUN php test.php

# Install composer as per https://getcomposer.org/download manual
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"  && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');"
