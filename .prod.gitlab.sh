#!/usr/bin/env bash

find . -name '.gitignore' -delete
find . -name 'docker-compose.yml' -delete
find . -name 'README.md' -delete
find . -name '.htaccess' -delete
find . -name 'config.json' -delete
find . -name '.docker.*' -delete
find . -name 'composer.*' -delete
find . -name 'Dockerfile' -delete

mv php/web/.prod.config.json php/web/config.json
mv php/web/.prod.htaccess php/web/.htaccess