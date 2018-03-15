# InLab: Indie Collabaration tool
*A online collaberation tool for Indie developers*
InLab is a web application where indie developers can find people to collaberate with on all different kinds of projects.

## Frameworks
InLab incorperates a few different frameworks to accomplish the app.

### Laravel
InLab uses [Laravel](https://laravel.com/) to handle the backend of the application.

### Vue js
InLab uses [Vue](https://vuejs.org/) as its frontend framework.

### Bootstrap
Intlab uses [Bootstrap](https://getbootstrap.com/docs/3.3/) to handle the css.
- [Bootstrap variables](https://github.com/twbs/bootstrap-sass/blob/master/assets/stylesheets/bootstrap/_variables.scss)

## Installing the application (for the first time)
- Clone the Repository
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh`
- Run `php artisan db:seed`
- Run `php artisan storage:link`
- Run `npm install`
- Run `npm run dev` for development and `npm run prod` for production

## Updating the application
- Pull the latest commits
- Run `composer install`
- Run `composer dump-autoload`
- Run `php artisan migrate`
- Run `npm install`
- Run `npm run dev` for development and `npm run prod` for production