<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'location'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
