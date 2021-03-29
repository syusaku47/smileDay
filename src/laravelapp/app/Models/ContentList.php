<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentList extends Model
{
    protected $table = 'content_lists';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'name',
        'type_id',
        'disp_flag'
    ];
}
