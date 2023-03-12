<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table ='bukus';
    protected $primarykey = 'id';
    protected $fillable = [ 'id', 'judulbuku', 'th_terbit', 'pengarang', 'penerbit', 'gambar'];
}
