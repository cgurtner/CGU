#!/usr/bin/env bash

rm -rf dist
docker rm cgu_web_prod

docker build --target=prod -t cgu_web:latest ./php/web/ 
docker create -ti --name cgu_web_prod cgu_web:latest bash
docker cp cgu_web_prod:/var/www/dist dist

rsync -e 'ssh -p2121' -rvP --delete dist/ cgu@cgurtner.ch:/httpdocs/cgurtner.ch/

docker rm cgu_web_prod
rm -rf dist