#!/bin/sh

echo "Installing PHP extensions"

apk add libpq-dev
docker-php-ext-install pgsql pdo_pgsql
