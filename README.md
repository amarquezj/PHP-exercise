# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

To start using the project and install al the dependencies you need Composer (dependency manager for PHP).
In order to install composer ensure you have PHP installed in your system - PHP version 7.3 or higher.
    - https://www.php.net/manual/en/install.php  --> Install manual

Once PHP is installed, Composer can be installed following this guide: https://getcomposer.org/doc/00-intro.md 

Once all of this is installed open a terminal locate yourself in the PHP-Exercise folder and run `composer update`


## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Setup database

For the sake of the exercise MYSQL workbench can be used. -> https://www.mysql.com/products/workbench/

In order to import the database content open a SQL tab and copy and execute the content of InitExercise.sql file located in app/database folder. This will create the schema exercise_php, the table users and insert 3 rows in the table.



## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)


## Start the server

A CodeIgniter 4 app can be run in a number of different ways: hosted on a web server, using virtualization, or using CodeIgniter’s command line tool for testing.

CodeIgniter 4 comes with a local development server, leveraging PHP’s built-in web server with CodeIgniter routing. You can use the serve script to launch it, with the following command line in the main directory of the project:

`php spark serve`
This will launch the server and you can now view your application in your browser at http://localhost:8080.

If everything was done correctly you should get something like this:
![alt text](https://github.com/amarquezj/PHP-exercise/blob/master/picturesForMD/CandidatesList.PNG?raw=true)

# Exercises

## Implement delete functionality

The first exercise will be to implement the delete functionality in the candidate list. As you can see there is a delete button in the list for each candidate. 
The exercise consists in modify the HTML and PHP files so when a user clicks the delete button the user is deleted from the database and it will not appear in the list anymore. (No confirmation message or popup is needed.)


## Implement Create new candidate functionality

The second exercise will be to complete the Create new candidate functionality. The popup is already created but the PHP code that retrieves the information and insert it in the database is not in place yet. 