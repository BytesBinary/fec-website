# Educational-Projects
This repository contains a full educational platform for Faridpur Engineering College. Though we have developed the CMS for any kind of educational organization.

## Developer Docs :
### Installation
1. Clone the repository
```bash
https://github.com/BytesBinary/fec-website
```
2. Install the requirements
```bash
composer install
```
3. Create a .env file
```bash
cp .env.example .env
```
4. Generate an app encryption key
```bash
php artisan key:generate
```
5. Create an empty database for our application
6. In the .env file, add database information to allow Laravel to connect to the database
7. Migrate the database
```bash
php artisan migrate
```
8. Seed the database
```bash
php artisan db:seed
```
9. Install node modules
```bash
npm install
```
10. Build assets
```bash
npm run dev
```
11. Start the server and run the below command in a new terminal
```bash
php artisan serve
```
12. You can now access the server at http://localhost:8000
13. To access the admin panel, go to http://localhost:8000/panel/login
14. Default admin credentials are:
```bash
Email: admin@fec.com
Password: admin
```
15. You can now access the admin panel at http://localhost:8000/panel

### Technologies Used
1. [Laravel](https://laravel.com)
2. [Livewire](https://laravel-livewire.com)
3. [Tailwind CSS](https://tailwindcss.com)
4. [Alpine.js](https://alpinejs.dev)
5. [Filament](https://filamentphp.com)

#### All rights reserved by BytesBinary
