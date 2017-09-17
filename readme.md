<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Multi Authentication
<p>
	This project I was made From this <a href="https://www.youtube.com/watch?v=iKRLrJXNN4M">Video</a>,You can clone this repository for your bussiness, it's free for use.
</p>

## Contact Me

Wanna contact me for the issues, please inbox me.

* [StackOverflow](https://stackoverflow.com/users/7978371/deki-akbar)
* [Facebook](https:web.facebook.com/itsdekiakbar)
* [LinkedIn](https:linkedin.com/dekiakbar)
* Email : Dekiakbar@linuxmail.org

## How to Install this

1.Clone this repository, Using linux command :
```
git clone https://github.com/dekiakbar/siakad
```
2.Enter the directory :
```
cd /multiauth
```
3.then run the following command in your terminal :
```
composer update
```
4.then run this command to generate new key on your laravel project :
```
php artisan key:generate
```
5.change **.env.example** to **.env** locate on /multiauth or use this command on linux terminal :
```
cp .env.example .env
``` 
6.dont forget to change the database name,username and password on **.env** file, then run :
```
php artisan migrate
```

## Built With (Require)

* [Laravel 5.5](https://laravel.com/docs/5.5/installation) - The web framework used.
* [PHP 7.0](http://php.net/downloads.php) - The PHP version must >= PHP 7.0.
* [Composer](https://getcomposer.org/download/) - Composer For update this project.