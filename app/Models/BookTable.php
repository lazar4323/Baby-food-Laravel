<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTable extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'name',
        'email',
        'number',
        'time',
        'size',
        'date',
        'message'
    ];

    protected $hidden = [
        
    ];
}
