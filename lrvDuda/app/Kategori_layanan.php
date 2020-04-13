<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_layanan extends Model
{
    protected $table = 'kategori_layanan';
    protected $fillable = ['id','layanan_id','name'];

    public function layanan()
    {
    	return $this->belongsTo('App\Layanan');
    }
    public function produk()
    {
    	return $this->hasMany('App\Produk');
    }
}
