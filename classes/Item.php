<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Item extends Eloquent {
    protected $fillable = ["card_id", "date_1", "date_2", "time_1", "time_2"];

    public $timestamps = false;
}