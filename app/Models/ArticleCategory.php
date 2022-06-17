<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    use HasFactory;

    protected $table = 'article_categories';
    protected $primaryKey = 'id';

    public function article(){
        return $this->hasMany('App\Models\Article', 'id_category');
    }
}
