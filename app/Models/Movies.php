<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'movies';
    protected $fillable = [
        '_id',
        'type',
        'name',
        'slug',
        'origin_name',
        "content",
        'type_release',
        'status',
        'thumb_url',
        'poster_url',
        'trailer_url',
        'theater_screen',
        'time',
        'episode_current',
        'episode_total',
        'quality',
        'lang',
        'year',
        'actor',
        'view',
        'director',
        'category',
        'country',
        'episodes',
        'vietsub'
    ];
}
