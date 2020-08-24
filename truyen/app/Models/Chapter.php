<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';

    protected $fillalbe = ['name','subname','content'];

    public function story(){
        return $this->belongsTo('App\Models\Story');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
