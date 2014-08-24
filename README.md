#Please note: This package is extracted from a test project for learning purposes.

A simple package for organize comments.


## Installation

Add the following to you composer.json file

    "persson/comments": "dev-master"

Run

    composer update

Add the following to app/config/app.php

    'Persson\Comments\CommentsServiceProvider'

Run the package migration

    php artisan migrate --package=persson/comments

Publish the config (not mush to config yet...)

    php artisan config:publish persson/comments
