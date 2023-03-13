<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;
    protected $table = 'ads';

    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }

}
