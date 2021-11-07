<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model    
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'image', 'title', 'date', 'description'
    ];

    public function blogs()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
