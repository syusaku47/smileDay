<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $table = 'bases';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'base_name', 'potal_number', 'address', 'phone_number', 'base_type_id'];
}
