<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $fillable = ['id','name'];

    public function kategori_layanan()
    {
    	return $this->hasMany('App\Kategori_layanan');
    }
}
