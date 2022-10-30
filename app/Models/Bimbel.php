<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbel extends Model
{
    protected $table = 'bimbels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'deskripsi',
        'category_id',
        'user_id',
        'requirment',
        'outcome',
        'harga',
        'photo'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modul()
    {
        return $this->hasMany(Modul::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
