# Docker-compose PHP Application
This is a docker compose that helps in dockerizing a Student Record Application built with PHP.You can view the full repository 

# How to use 
To get started,make sure you have Docker and Docker compose installed on your systemand then clone this repository
To install docker use the commnd:
## sudo apt install docker
To install docker compose use the command
## sudo apt install docker-compose
Clone this repository
Then go to the /app folder which consists of the PHP codes and the the docker-compose.yml file
Lets build the container by running the following command from /app folder
## docker-compose build && docker-compose up -d

To bring the containers down you can run the command 
## docker-compose down
Check the application online with the ipaddress:80 that is accessible online
