<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKModel extends Model
{
    protected $table = 'ptrsihsk';
    protected $fillable = ['unit','judul','deskripsi','files','tgl_upload'];
}
