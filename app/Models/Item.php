<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    protected $table = 'itemList';
    protected $primaryKey = 'no';
    public static function getItem(){
        $item = Item::get()->toArray();
        return $item;
    }
    //
}
