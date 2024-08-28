<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'ptrsihperaturan';
    protected $fillable = ['unit','judul','deskripsi','files','tgl_upload'];
}
