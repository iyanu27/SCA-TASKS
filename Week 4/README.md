## Nginx, Nodejs, nestjs Using docker compose

# Prerequisites

# Install nginx on your system

1.sudo apt update
2.sudo apt install nginx

# Install Docker on your system.
Install instructions for Mac OS X -https://docs.docker.com/installation/mac/
Install instructions for Ubuntu Linux-https://docs.docker.com/installation/ubuntulinux/
Install instructions for other platforms- https://docs.docker.com/installation/

# Install Docker Compose on your system.
Python/pip: sudo pip install -U docker-compose

Other: curl -L https://github.com/docker/compose/releases/download/1.1.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose; chmod +x /usr/local/bin/docker-compose

## Setup
=====
1. In this repository we have the django app which is expected to be runnning on port 8000
2. In this repository we have the nestjs which is expected to be running on port 5000/api
3. Each repository has its own "dockerfile" and "docker-compose.yml" file with the same "wnetwork :external:app"
4. Also we have the nginx repository which consist of the "dockerfile" and the "nginx conf"
5. We have the docker-compose.yml which will help us build the images for the container
6. .env establishes connection to the databse


## Start
=====

Run docker-compose build or docker-compose build -d (runs in the background). It will do the following

build the container for our Django app 
build the container for our mysql 
build the container for our nesjs app 
build the container for the Nginx server

## To check if the containers are running use : docker ps -a

## Usage
====
You can check the Ipaddress:8000,Ipaddress:5000/api to know if the applications are running
