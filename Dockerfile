FROM ubuntu:latest

RUN apt-get update \
    && export DEBIAN_FRONTEND=noninteractive \
    && apt-get install -y \
    net-tools \
    php7.4 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /app
COPY challenges/misc/php_file_exploits/ /app/

WORKDIR /app/root
