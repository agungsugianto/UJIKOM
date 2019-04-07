<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangfoto extends Model
{
    protected $fillable = ['foto','barang_id'];
    
    public function barang()
    {
        return $this->belongsTo('App\Barang', 'barang_id');
    }

}
