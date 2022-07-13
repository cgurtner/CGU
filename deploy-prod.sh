#!/usr/bin/env bash

docker build --target=prod -t cgu_web:release ./php/web/ 
docker create -ti --name cgu_web-release cgu_web:release bash
docker cp cgu_web-release:/var/www/dist cgu_web-release

rsync -e 'ssh -p2121' -rvP --delete cgu_web-release/ cgu@cgurtner.ch:/httpdocs/cgurtner.ch/

docker rm cgu_web-release
docker rmi cgu_web:release
rm -rf cgu_web-release
