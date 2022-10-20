# Commands

Since Sail uses Docker Containers to run the host individual processes.

PHP, Artisan, NPM, Bash, Composer, etc. commands are ran using Sail instead

Normally you would make a model using

`php artisan make:model Cum`

But with Sail, you have to run the `make:model` using

`sail artisan make:model Cum`

***THIS IS FOR ARTISAN ONLY***

***OTHER COMMANDS THAT DON'T INVOLVE ARTISAN ARE RAN LIKE THIS***

`sail php COMMAND`

Same with composer, npm, yarn, node

`sail composer install`

`sail npm install`

`sail yarn install`

You get the idea

## Restarting services

To restart a specific service

`sail restart SERVICE`

`sail restart mysql`