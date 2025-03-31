# Usa l'ultima versione di PHP con Apache
FROM php:8.2-apache

# Copia tutti i file del progetto nella cartella di Apache
COPY . /var/www/html/

# Imposta i permessi corretti per i file
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Espone la porta 80 per il web server
EXPOSE 80

# Avvia Apache
CMD ["apache2-foreground"]
