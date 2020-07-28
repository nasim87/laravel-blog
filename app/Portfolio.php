<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $primaryKey="id";
    protected $table="portfolios";
    protected $fillable=['image'];
    
}
