<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
 
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'background_image_url',
        'avatar_image_url',
        'start_date',
        'end_date',

    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
