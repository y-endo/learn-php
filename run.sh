#!/bin/bash

LOCAL=$(cd $(dirname $0) && pwd)
docker stop learn-php
docker rm learn-php
docker run -d -p 8888:80 -v "${LOCAL}/www/html":/var/www/html --name learn-php php:7.4.2-apache