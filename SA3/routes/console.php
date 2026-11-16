<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:activity', function () {
    $this->comment('IT0049 TSA3 - Tasks for Today Management System in Laravel.');
})->purpose('Show the name of this activity');
