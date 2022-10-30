<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'bukti',
        'user_id',
        'bimbel_id',
        'verify',
        'progres'
    ];

    public function bimbel()
    {
        return $this->belongsTo(Course::class, 'bimbel_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
