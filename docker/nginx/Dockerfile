FROM nginx:alpine
MAINTAINER david nuño <https://davidnuno.es>

COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /app
COPY ./app .
COPY physing.php ./physing.php

VOLUME [ "results.txt", "/app/results.txt" ]