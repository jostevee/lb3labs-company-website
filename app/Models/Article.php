<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table='articles';
    protected $primaryKey = 'id';

    public function writer() {
        return $this->belongsTo('App\Models\Writer', 'id_writer');
    }

    public function category(){
        return $this->belongsTo('App\Models\ArticleCategory', 'id_category');
    }
}
