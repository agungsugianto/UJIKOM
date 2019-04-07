<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang','kategori_id','slug','harga','deskripsi','beli'];
    
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
