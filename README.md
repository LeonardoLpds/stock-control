# The Project
This project (Stock-Control) is part of a selection process for [__Altran Brazil__](https://www.altran.com.br/).

The process consists in develop a simple stock-control system with 3 tables:

|    Product   |     |     Order    |     |    Client    |
| ------------ | --- | ------------ | --- | ------------ |
|  ID          |     |  ID          |     |     ID       |
|  Description |     |  Product ID  |     |     Name     |
|  Price       |     |  Client ID   |     |     E-Mail   |
|              |     |              |     |     Phone    |

## Objective
- Create CRUDs for each entity
- Create a simple layout using [Bootstrap](http://getbootstrap.com/)

## Usage
This project it's all ready for use, but some things have to be checked first.
### DataBase
This project was be developed using MySQL, so you'll can import the [sql file](https://github.com/LeonardoLpds/stock-control/blob/master/stock-control.sql) in my repository to your database (you'll need create a database called stock-control).

##### Database configuration
On the main directory has a file called `stock-control-config.php`, this file contains the following lines of code:
```php
<?php
// DATABASE CONFFIGURATION
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'stock-control');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', 'root');
//...
```
Change that configuration as needed

### Host
By default, this project assumes that you will use a dedicated host (or virtual host) for him(http://stock-control/ or http://www.stock-control.com), if you don't (if you use a prefix http://localhost/stock-control/ with xampp or wamp for instance), please, follow the next steps:
##### Host Configuration
On the main directory at the same file `stock-control-config.php`, you can find the following code:
```php
<?php
//...
define('SITE_PATH', '');
```
You have to change that line with the sub-folder of your host server, for example, if you are using xampp, and put inside the htdocs folder the project stock-control/, you will access that project with the URL http://localhost/stock-control/, so, your sub-folder is stock-control (because your server is localhost). For that case, the line have to be changed for:
```php
<?php
define('SITE_PATH', 'stock-control/'); //with slash on the end.
```
##### .htaccess
The .htaccess follow the same rule above:
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php [L,QSA]
```
Have to be changed for:
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /stock-control/index.php [L,QSA]
```
## Next Step
The second part of the selection process is do the same thing using [WordPress](https://wordpress.org/).
You can find this project on my github at http://github.com/LeonardoLpds/stock-control-wordpress/
