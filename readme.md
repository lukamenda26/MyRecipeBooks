# My Recipe Book
It is your favorite recipe-books recomendation site

<!-- <p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## About this site

It is for someone who wants to share him or her special experience around cooking by using some recipe-books. You can post not only your favorite recipe-books' recommendations, but also cakes' or dishes' ones included in the books.

- Language: Japanese
- Japanese title: 料理本おすすめサイト Myレシピブック

## Dependency

- Programming Language: PHP 7.3.8
- Web Framework: Laravel 5.5, Bootstrap 3.3.5
- Javascript Framework: Vue.js 2.6.10
- Web Server: Nginx
- Development Environment: Docker (using Laradock https://github.com/Laradock/laradock.git)

## Installing into your local environment

### Requirements
- Git
- Docker

### How to Installing
Installing Laradock
```
$ mkdir laravel_docker
$ cd laravel_docker
laravel_docker $ git clone https://github.com/Laradock/laradock.git
```
Inisialazing the containers
```
laravel_docker $ cd laradock
laradock $ cp env-emaple .env
laradock $ docker-compose docker-compose up -d nginx mysql mailhog
```
Login Vertual environment
```
laradock $ docker-compose exec workspace bash
```
Making a new Laravel project
```
/var/www # composer create-project sampleapp --prefer-dist "5.5.*"
/var/www/ # exit
```
Modifying an .env file in a Laradock directry as below:
```
###########################################################
###################### General Setup ######################
###########################################################

### Paths #################################################

# Point to the path of your applications code on your host
# APP_CODE_PATH_HOST=../
APP_CODE_PATH_HOST=../sampleapp
```
Installing this project
```
laradock $ cd ..
laravel_docker $ rm -rf sampleapp
laravel_docker $ mkdir sampleapp
laravel_docker $ cd sampleapp
sampleapp $ git clone https://github.com/lukamenda26/MyRecipeBooks
```
Restart the containers
```
sampleapp $ cd ../laradock
laradock $ docker-compose stop
laradock $ docker-compose docker-compose up -d nginx mysql mailhog
```
Check "CONTAINER ID" whose "NAMES" is "laradock_mysql_1" by the command as below:
```
laradock $ docker ps
```
Login MySQL (password: root)
```
laradock $ docker exec -it {the "CONTAINER ID"} /bin/bash
root@{the "CONTAINER ID"}:/# mysql -u root -p
```
Change User-authentication of MySQL
```
mysql> SELECT user, host, plugin FROM mysql.user;
+------------------+-----------+-----------------------+
| user             | host      | plugin                |
+------------------+-----------+-----------------------+
| default          | %         | caching_sha2_password |
| root             | %         | caching_sha2_password |
| mysql.infoschema | localhost | caching_sha2_password |
| mysql.session    | localhost | caching_sha2_password |
| mysql.sys        | localhost | caching_sha2_password |
| root             | localhost | caching_sha2_password |
+------------------+-----------+-----------------------+
mysql> ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
mysql> ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
mysql> ALTER USER 'default'@'%' IDENTIFIED WITH mysql_native_password BY 'secret';
mysql> .\q
root@{the "CONTAINER ID"}:/# exit
```
Modifying a my.cnf file in a Laradock/mysql directry as below:
```
[mysqld]
sql-mode="STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION"
character-set-server=utf8
default_authentication_plugin= mysql_native_password # <- new addition
```
Migrations (create a database and tables for this web-site)
```
laradock $ docker-compose exec workspace bash
/var/www # php artisan migrate
```
### Check the web-site through browsers
Please access http://localhost/home