<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    use HasFactory;

    protected $table = 'career_categories';
    protected $primaryKey = 'id';

    public function career(){
        return $this->hasMany('App\Models\Career', 'id_category');
    }
}
