<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // Nama tabel di database
    protected $table = 'artikel';

    // Primary key custom
    protected $primaryKey = 'id_artikel';

    // Primary key bukan integer, tapi string
    protected $keyType = 'string';

    // Matikan auto increment karena pk berupa string
    public $incrementing = false;

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'id_artikel',
        'judul',
        'slug',
        'isi',
        'kategori',
        'penulis',
        'gambar',
        'status',
    ];
}