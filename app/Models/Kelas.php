<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
     // Kolom yang diisi UUID
     protected $keyType = 'int';
     public $incrementing = true;
     public $timestamps = false;
     
    public function jurusan(): BelongsTo{
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }

    public function siswas(): HasMany{
        return $this->hasMany(Siswa::class, 'id_kelas', 'id');
    }

    public function jadwalGuruMengajar(): HasMany
    {
        return $this->hasMany(JadwalGuruMengajar::class, 'id_kelas', 'id');
    }
}
