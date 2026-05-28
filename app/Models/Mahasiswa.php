<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim', 'jurusan'];
    use HasFactory; // 2. Tambahkan baris ini di dalam class
}
