# toastr

[toastr.js](https://github.com/CodeSeven/toastr) for laravel5

# Installation

* Run composer require littlestarsx/toastr
* Add Littlestarsx\Toastr\ToastrServiceProvider::class, to providers in config/app.php
* Add 'Toastr' => Littlestarsx\Toastr\Facades\Toastr::class, to aliases in config/app.php
* Run php artisan vendor:publish

# Usage

Just add this code to your blade template file:

{!! Toastr::render() !!}

# Use these methods in controllers:

* Toastr::warning($message, $title = null, $options = [])
* Toastr::error($message, $title = null, $options = [])
* Toastr::info($message, $title = null, $options = [])
* Toastr::success($message, $title = null, $options = [])
* Toastr::clear()
