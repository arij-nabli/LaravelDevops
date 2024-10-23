# Utiliser l'image de base PHP avec Apache
FROM php:8.2-apache

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendances système et les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier le fichier de configuration Apache
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Activer le module de réécriture d'Apache
RUN a2enmod rewrite

# Copier le code de l'application Laravel dans l'image
COPY . .

# Installer les dépendances de Laravel
RUN composer install

# Changer le propriétaire des fichiers à l'utilisateur www-data (Apache)
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80

# Commande par défaut pour exécuter Apache
CMD ["apache2-foreground"]
