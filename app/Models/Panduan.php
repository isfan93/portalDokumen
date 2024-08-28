<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    protected $table = 'panduan';
    protected $fillable = ['id','unit','judul','deskripsi','files','tgl_upload'];
}
