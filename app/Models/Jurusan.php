<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    protected $primaryKey = 'id'; // Kolom 'id' sebagai primary key secara default
    public $incrementing = true; // Menggunakan auto-increment untuk kolom 'id'
    public $timestamps = false; 

    public function kelas(): HasMany{
        return $this->hasMany(Kelas::class, 'id_jurusan', 'id');
    }
}
