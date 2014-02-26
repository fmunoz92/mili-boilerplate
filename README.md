mili-boilerplate
===========


```bash
cd /var/www/ or cd yourlocalhostfolder
$  git clone https://github.com/fmunoz92/mili-boilerplate.git
```
Configure db:

create an empty database: for example "mili"

rename app/config/configexample.php to app/config/config.php and edit with the correct values
```php
$config->set('dbname', 'mili');
$config->set('dbuser', 'root');
$config->set('dbpass', 'pass');
```
then run
```bash
$ composer install
$ composer dump-autoload
$ php vendor/bin/doctrine orm:schema-tool:update --force
```
finally run your browser in [http://localhost/mili-boilerplate](http://localhost/mili-boilerplate)
