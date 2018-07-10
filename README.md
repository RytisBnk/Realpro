# Realpro

Reference sheet for the project. To be edited when more relevant info needs to be displayed in a convenient location.

## Installation

Since github doesn't track all of the files that are needed for the application to fucntion, there is some setup work that needs to be 
done. 
This guide is relevant for windows users, using [Xampp](https://www.apachefriends.org/index.html) to host the website locally.

### Prerequisite software

[Xampp](https://www.apachefriends.org/index.html) for hosting the website. Apache, MySql and PHP are included in the instalation and don't
have to be installed separately.

[Composer](https://getcomposer.org/download/) for managing dependencies. I recomend download the installer and not bother with the command 
line installation method.

**Handy, but not necessarily needed:** <br/>
[Github desktop](https://desktop.github.com/) - a conveniant tool for collaboration with git. Provides a graphical user interface for git, 
so work can be done without using the git bash.

### Cloning the repository

Now when xampp is installed, you need to clone the reposiroty into the Xampp/htdocs folder. Instructions on how to clone a repository can 
be found [here](https://services.github.com/on-demand/github-desktop/clone-repository-github-desktop). Just don't forget to set the local path to a subfolder of Xampp/htdocs (**example path:** C:\Users\Rytis\Desktop\XAMPP\htdocs\realpro).

### Downloading required libraries

Since we're using Laravel framework our code in dependent on external libraries. To download those libraries follow these steps: <br/>

1. Run windows command prompt as an aministrator.
2. Navigate to realpro/app directory (with cmd).
3. Run the following command:
    ```shell
    composer install
    ```
All of the required libs should be installed now without the need to do anything else.

### Setting application encryption key

Laravel framework requires an encryption key in an .env file. This file should be located in realpro/app folder along with .env.example. 
If it's not there (which it will likely be, if you cloned the repo), you need to create it and copy .env.example file content into it.
This can be easily done by simply running this command in cmd (make sure you are in realpro/app directory).
```shell
copy .env.example .env
```
After the .env file is there and filled with .env.example content, run:
```shell
php artisan key:generate
```

### Creating storage folders

Navigate to realpro/app directory and run the following commands into cmd:
```shell
mkdir storage
cd storage
mkdir app
mkdir cache
mkdir framework
mkdir logs
cd framework
mkdir cache
mkdir logs
mkdir sessions
mkdir views
```
You can simply just copy-paste the entire thing into cmd and it will be run without the need of pasting each command one by one.

### Database setup

First you need to create the database itself and setup a user account for that database using phpmyadmin. Instructions on how to to that
can be found [Here](http://webvaultwiki.com.au/Create-Mysql-Database-User-Phpmyadmin.ashx). Don't create any tables yet, that will
be done through migrations. <br/>

Once that is done, open up the .env file (located in realpro/app) and change DB_DATABASE, DB_USERNAME and DB_PASSWORD to match the values that you chose during database creation process. </br>

To check if the database is connected open your browser and type http://localhost/realpro/app (link may differ depending on your 
repository folder name). If no error appears and you see the basic laravel page, it means the database was connected succesfully. If you
see an error, check your .env file.

Once the database is connected, navigate to realpro/app folder with cmd and run the following command:
```shell
php artisan migrate
```
All the required tables will be created using the migration files located [here](https://github.com/RytisBnk/Realpro/tree/master/app/database/migrations)
