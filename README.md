<snippet>

<content>

# PhpUnitaryTest

Hello everyone, **@GuilhermeBorges3Ddev** here! 

Today we'll apply some TDD over PHP, to execute the test you've to first clone these repository; stay on with the structure, you have to repply your directorie exactly like that:

```
|-- PhpUnitaryTest
|--|app
|--|--|Controllers
|--|--------------|Core
|--|------------------|Web
|--|----------------------|Pages.php
|--|tests
|--|----|app
|--|-------|Controllers
|--|------------------|Core
|--|----------------------|Web
|--|-------------------------|PagesTest.php
|--|vendor
|--|-----|bin
|--|-------|composer
|--|---------------|phpunit
|--|----------------------|symfony
|--|-----------------------------|autoload.php
|--|Calculator.php
|--|CalculatorTest.php
|--|composer.json
|--|composer.lock
|--|index.php
|--|phpunit.xml
|--|README.md

```
## Install the environment

After check your directory structure run by security the following line on your terminal, remember that you have to be installed PHP globally previously :

`php -v`
```bash
php composer.phar install
```
```bash
php composer.phar update
```
```bash
composer install
```
```bash
composer update
```


## Using the test environment installed:

With composer installed in your repository you have to keep in a local like this:

* C:\yourLocalServer\www\PhpUnitaryTest 

By the end of these simple notion execute the last two comands to mount and test respectively:

```bash
composer require --dev phpunit/phpunit ^3
```
```bash
phpunit PagesTest.php
```
```bash
phpunit CalculatorTest.php
```

## Credits

These three references are implemented in a single code (phpunit CalculatorTest.php), what are able to a test routine:

https://www.startutorial.com/articles/view/phpunit-beginner-part-1-get-started

https://www.startutorial.com/articles/view/phpunit-beginner-part-2-data-provider

https://www.startutorial.com/articles/view/phpunit-beginner-part-3-get-startedtest-double


## License

Open-source content

</content>

<tabTrigger>""Stay codding, but don't forget to test""</tabTrigger>

</snippet>