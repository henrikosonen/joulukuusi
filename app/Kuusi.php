<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuusi extends Model
{
    //Table name
    protected $table = 'kuusi';
    //Primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}


