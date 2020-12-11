## Course Management

A syste to keep trach of students and courses

### Pre-requirisits

 - You must have nodejs installed
 - You must have XAMPP installed
 - You must have composer installed

### Installation

Create a database for saving the data

```sh
cp .env.example .env
```

Change the database credentials to match yours

Run the following commands in the root directory of the project

```sh
composer install

php artisan key:generate

php artisan migrate

npm install && npm run dev

php artisan serve
```

Then open the browser and visit the url localhost:8000