<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Command Used
<p>composer install</p><br>
<p>cp .env.example .env</p><br>
<p>php artisan key:generate</p><br>
<p>php artisan serve</p><br>
<p>php artisan make:model AddStaffForm -mc</p><br>
<p>php artisan make:controller AddStaffForm -r</p><br>
<p>php artisan make:model AddManagerForm -mc</p><br>
<p>php artisan make:controller AddManagerForm -r</p><br>
<p>php artisan make:migrate create_tablename_table (You may use the make:migration Artisan command to generate a database migration)</p><br>
<p>php artisan migrate  (To run all of your outstanding migrations, execute the migrate Artisan command:)</p><br>
<p>php artisan migrate:status  (If you would like to see which migrations have run thus far, you may use the migrate:status Artisan command)</p><br>
<p>php artisan migrate:rollback  (To roll back the latest migration operation, you may use the rollback Artisan command.)</p><br>
<p>php artisan make:migration --reset (The migrate:reset command will roll back all of your application's migrations:)</p><br>
<p>php artisan storage:link (To create the symbolic link, you may use the storage:link Artisan command)</p><br>
<p>php artisan db:seed --class=CustomerDataSeeder (To create fake data for customer-data table)</p><br>


## Controller Details

<strong>AdminController</strong> : It is used to call the methods which return the view of admin panel
<br>
<strong>AddStaffFormController</strong> : It is used to access Add Staff Form in admin panel
<br>
<strong>AddManagerFormController</strong> : It is used to access Add Manager Form in admin panel

## Migration Details

<strong>add_staff_forms</strong> : Schema defined for storing staff details
<br>
<strong>add_manager_forms</strong> : Schema defined for storing manager details
<br>

## Document Details

<strong>public/images/staff/aadharcard</strong> : For storing Aadhar Card of Staff
<br>
<strong>public/images/staff/pancard</strong> : For storing Pan Card of Staff
<br>
<strong>public/images/staff/photo</strong> : For storing Photo of Staff
<br>
<strong>public/images/staff/signature</strong> : For storing Signature of Staff
<br>

