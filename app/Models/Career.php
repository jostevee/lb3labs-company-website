<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table='careers';
    protected $primaryKey = 'id';

    public function writer() {
        return $this->belongsTo('App\Models\Writer', 'id_writer');
    }

    public function category(){
        return $this->belongsTo('App\Models\CareerCategory', 'id_category');
    }

}
