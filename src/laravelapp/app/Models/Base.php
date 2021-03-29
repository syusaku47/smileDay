<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Base extends Model
{
    protected $table = 'bases';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = [
        'id', 'base_name', 'potal_number', 'prefecture_id', 'address', 'phone_number', 'base_type_id'
    ];



    public function contents()
    {
        return $this->hasMany('App\Models\Content');
    }
}
