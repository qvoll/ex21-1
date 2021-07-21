FROM php:7.4-apache

# install tzdata
RUN apt-get update && apt-get install -y \
    tzdata \
    && rm -rf /var/lib/apt/lists/*

# var setting timezone
ENV TZ=Asia/Tokyo

# move dir
WORKDIR /usr/local/etc/php

# cp file
COPY php.ini ${PWD}

ARG wdir

WORKDIR $wdir

