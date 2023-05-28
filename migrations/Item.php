<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('items', function ($table) {

    $table->increments('id');
    $table->integer('card_id');
    $table->date('date_1');
    $table->date('date_2');
    $table->time('time_1');
    $table->time('time_2');
});