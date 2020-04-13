<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['id','kategori_layanan_id','name'];

    public function kategori_layanan()
    {
    	return $this->belongsTo('App\Kategori_layanan');
    }
}
