# Nginx stable + PHP 8.3 + MySQL 8.1 + WordPress 6.5.3 + PhpMyAdmin latest

## For local dev usage only! Not for production use!

1) Clone the repository
2) Add an item to your hosts file `127.0.0.1 wordpress-solo.loc`
3) Install certificate config/nginx/certs/wordpress-solo.loc.crt into your system `Trusted Root Certification Authorities` storage
4) Run docker containers `docker-compose up -d` *Note, first start will take more time to startup adjust database.
5) Open the browser and go to https://wordpress-solo.loc
6) Enjoy!

Admin side is on https://wordpress-solo.loc/wp-admin
username: `admin`, password: `qwerty123456`

PhpMyAdmin side is on http://wordpress-solo.loc:8080
Server: `mysql`, username: `mysql`, password: `mysql`

How to use terminal of necessary container?
`docker exec -ti php sh`
And you will allow to run `composer`, `php`, `npm` and other commands in the container
