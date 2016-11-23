# toastr

toastr for laravel5

# Installation

* Run composer require fenxiangpaomo/toastr
* Add Fenxiangpaomo\Toastr\ToastrServiceProvider::class, to providers in config/app.php
* Add 'Toastr' => Yuansir\Toastr\Facades\Toastr::class, to aliases in config/app.php
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
