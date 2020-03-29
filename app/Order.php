<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Table name
    protected $table = 'order';
    //Primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

    public function kuusi(){
        return $this->hasMany('App\Kuusi');
    }
}
