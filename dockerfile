# Gebruik een officiële PHP image met Apache
FROM php:8.2-apache

# Zet de werkdirectory
WORKDIR /var/www/html

# Kopieer alle bestanden naar de container
COPY . /var/www/html

# Exposeer poort 80
EXPOSE 80
