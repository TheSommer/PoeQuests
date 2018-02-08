# PoeQuests

Interactive "Quest-cheatsheet" for Path of Exile.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

```
PHP 7.0.x
Composer
Git
SQLite
```

### Installing

Manually download or clone this project to your destination folder and enter the downloaded directory in your CLI.

```
Windows PowerShell & Git:

> cd your-projects-folder
> git clone https://github.com/TheSommer/PoeQuests.git
> cd PoeQuest
```

Install dependencies with Composer

```
> composer self-update
> composer install
```

Configure environment variables

```
The provided ".env.example" contains settings for the SQLITE-connector.

Copy and Rename the ".env.example" to ".env".

Create a file in the Database-directory called "database.sqlite" and copy the absolute filepath.

Add the filepath you just copied to this line in your ".env"

DB_DATABASE={absolute path to database.sqlite}

```

Run included migrations and seeders

```
> php artisan migrate:refresh --seed
```

Serve the application with Artisan

```
> php artisan serve
```

You're done m8.

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
