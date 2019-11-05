<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table = 'phones';

    protected $fillable = ['number_phone', 'user_name', 'user_id'];

    protected $hidden = ['user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
