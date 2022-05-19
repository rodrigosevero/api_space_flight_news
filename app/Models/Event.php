<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'article',
        'provider'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'id', 'article');
    }
}
