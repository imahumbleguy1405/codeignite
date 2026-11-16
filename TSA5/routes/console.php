<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:activity', function () {
    $this->comment('IT0049 TFA5 - POS Foundations Laravel activity.');
})->purpose('Show the name of this activity');
