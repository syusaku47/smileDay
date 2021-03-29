<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'disp_flag',
    ];

    public function contentLists()
    {
        return $this->hasMany('App\Models\ContentList');
    }
}
