<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:activity', function () {
    $this->comment('IT0049 TFA6 - POS Foundations with Eloquent.');
})->purpose('Show the name of this activity');
