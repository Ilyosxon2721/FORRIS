#!/bin/bash
# FORRIS Deploy Script for Laravel Forge
# Place this in Forge's Deploy Script settings

cd /home/forge/forris.uz/current

# Install Node dependencies
npm install

# Build the app (outputs to public/)
npm run build

# Install Composer dependencies (required by Forge)
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader 2>/dev/null || true
