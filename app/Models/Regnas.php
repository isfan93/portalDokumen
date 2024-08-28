<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regnas extends Model
{
    protected $table = 'regnasional';
    protected $fillable = ['unit','judul','deskripsi','files','tgl_upload'];
}
