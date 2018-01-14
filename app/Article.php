<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Article model
 * TODO overwrite save method to generate slug instead of from the controller
 */

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function list_articles($ordering='desc'){
        return self::orderBy('created_at', $ordering)->get();
    }
}
