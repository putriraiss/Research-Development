<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table = 'feeds';
    protected $primaryKey = 'id_feed';
    public $timestamps = false;
    protected $fillable = [
        'karyawan_nip', 'title', 'desc_feed', 'img'
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Models\Karyawan', 'karyawan_nip', 'nip');
    }
}
