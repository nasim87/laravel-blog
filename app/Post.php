<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey="id";
    protected $table="posts";
    protected $fillable=['title','description','image','category_id'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
