# Datei: hello-world-php/Dockerfile (AngelNoiteiro/hello-world-php)

FROM php:8-apache
ENV TZ="America/Brasília"
COPY index.php /var/www/html
