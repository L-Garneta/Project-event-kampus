<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
Use Illuminate\Database\Eloquent\Relations\BelongsTo;
Use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'category_id',
        'created_by',
        'judul',
        'tema',
        'deskripsi',
        'tanggal',
        'waktu',
        'lokasi',
        'kuota',
        'poster',
        'status'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'waktu' => 'datetime:H:i'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}