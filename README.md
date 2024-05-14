# Notes CRUD

Simple Laravel application built with Breeze. Provides `note` object CRUD. Frontend built with Laravel blade components. Basic auth provided by Breeze package.

## Core functionality
- Login, register, vefiry email, restore password
- User profile: update name, email, password, delete an account
- Note CRUD: list of notes, create new note, update note and delete a note.
- Fully-covered with tests. To run: `php artisan test`

## Run project locally
### Requirements
- PHP 8.3, Composer
- Node.js, npm

### Setup project locally
1. Clone this repo
2. Run `composer install` to install all dependencies
3. Run `npm run dev` or `npm run build` to build frontend components
4. Setup Ngixn or Apache or simply run `php artisan serve`
5. Update `.env` file with correct project URL
5.1 You can simply run `php artisan server` and project will be available on: `http://127.0.0.1:8000`. Don't forget to update `.env` file.
5.2 Database by default set to SQLite. But you can update it `.env`.
6. Run `php artisan migrate --seed` to create database structure and seed some fake data.
7. Optionally you can run `php artisan test` to unsure tests are passed.

#### Author: Mike Kaharlykskyi (mishakagar@gmail.com)
