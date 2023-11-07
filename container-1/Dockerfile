FROM php:8.2-apache

RUN useradd -m lion && echo 'lion:lion' | chpasswd && usermod -aG sudo lion && usermod -s /bin/bash lion

RUN apt-get update -y \
    && apt-get install -y default-mysql-client \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

COPY . .
