<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('hello {name?}', function ($name=null) {
    if(isset($name)) {
        $this->comment("Hello, $name.");
        $rand = random_int(1, 10);
        if($rand > 5) $this->comment("Have an awesome day!");
    } else {
        $this->comment('Is it me you looking for?');
    }
})->describe('Lionel');
