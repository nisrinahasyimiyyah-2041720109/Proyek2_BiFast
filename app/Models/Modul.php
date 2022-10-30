<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = 'moduls';
    protected $primaryKey='id';

    protected $fillable = [
        'subject',
        'pdf',
     ];

    public function bimbel(){
        return $this->belongsTo(Bimbel::class);
    
    }
}