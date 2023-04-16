FROM ubuntu:latest

RUN apt-get update \
    && apt-get install -y \
    net-tools \
    php7.4-cli \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /app
COPY challenges/misc/file_upload/start_php.sh /app/start_php.sh
COPY challenges/misc/file_upload/index.html /app/index.html
COPY challenges/misc/file_upload/upload.php /app/upload.php
RUN mkdir /app/uploads
COPY challenges/misc/file_upload/uploads/flag.php /app/uploads/flag.php

WORKDIR /app
