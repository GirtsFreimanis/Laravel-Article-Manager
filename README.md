# Laravel Article Manager
This Laravel project includes CRUD functionality for articles
## Prerequisites:
• PHP 7.3+
####
• MySql
####
• Composer
####

## Project setup:

• rename ".env.example" to ".env" and fill in blanks:
<br>
![image](https://github.com/GirtsFreimanis/Laravel-Article-Manager/blob/master/readme-pictures/pic1.png)
<br>
####
• create a mysql schema:
<br>
CREATE SCHEMA laravel_articles
####
• Run commands in the project directory:
<br>
composer install
<br>
php artisan migrate
<br>
php artisan serve
####
• to fill laravel_articles table run:
<br>
php artisan db:seed

# Preview
localhost:8000/articles
![image](https://github.com/GirtsFreimanis/Laravel-Article-Manager/blob/master/readme-pictures/pic2.png)
####
![image](https://github.com/GirtsFreimanis/Laravel-Article-Manager/blob/master/readme-pictures/pic3.png)
####
![image](https://github.com/GirtsFreimanis/Laravel-Article-Manager/blob/master/readme-pictures/pic4.png)
####
![image](https://github.com/GirtsFreimanis/Laravel-Article-Manager/blob/master/readme-pictures/pic5.png)

