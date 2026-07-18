<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'nama_peserta',
        'email',
        'no_hp',
        'nim',
        'instansi',
        'status'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}