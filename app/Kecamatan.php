<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use Uuid;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
