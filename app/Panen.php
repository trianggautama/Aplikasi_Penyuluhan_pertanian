<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use Uuid;

    protected $fillable = [
        'kode_panen', 'jumlah', 'satuan', 'tanggal', 'penanaman_id',
    ];

    public function penanaman()
    {
        return $this->belongsTo(Penanaman::class);
    }
}
