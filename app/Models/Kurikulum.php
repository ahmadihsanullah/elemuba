<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kurikulum extends Model
{
    protected $primaryKey = 'id'; // Kolom 'id' sebagai primary key secara default
    public $incrementing = true; // Menggunakan auto-increment untuk kolom 'id'
    public $timestamps = false; 

    public function jadwalGuruMengajar(): HasMany{
        return $this->hasMany(Kurikulum::class,'id_kurikulum','id');
    }

}
