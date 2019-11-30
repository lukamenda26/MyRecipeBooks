# My Recipe Book
your favorite recipe-books recomendation site

<!-- <p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## About this site

It is for someone who wants to share him or her special experience around cooking by using some recipe-books. You can post not only your favorite recipe-books' recommendations, but also cakes' or dishes' ones included in the books.

- Language: Japanese
- Japanese title: 料理本おすすめサイト　Myレシピブック

## Dependency

- Programming Language: PHP 7.3.8
- Web Framework: Laravel 5.5, Bootstrap 3.3.5
- Javascript Framework: Vue.js 2.6.10
- Web Server: Nginx
- Development Environment: Docker (using Laradock https://github.com/Laradock/laradock.git)

## Installing into your local environment

Prereq: Git and Docker have been already installed.

Installing Laradock
```
$ mkdir laravel_docker
$ cd laravel_docker
laravel_docker $ git clone https://github.com/Laradock/laradock.git
```
Inisialazing containers
```
laravel_docker $ cd laradock
laradock $ cp env-emaple .env
laradock $ docker-compose docker-compose up -d nginx mysql mailhog
```
Login Vertual environment
```
laravel_docker $ docker-compose exec workspace bash
```