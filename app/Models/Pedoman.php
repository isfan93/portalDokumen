<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedoman extends Model
{
    protected $table = 'pedoman';
    protected $fillable = ['id','unit','judul','deskripsi','files','tgl_upload'];
}
