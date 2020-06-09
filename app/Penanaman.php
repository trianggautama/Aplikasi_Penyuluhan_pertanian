<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penanaman extends Model
{
    use Uuid;

    protected $fillable = [
        'kode_penanaman', 'tanggal', 'lahan_id',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }

}
