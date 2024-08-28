<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebijakan extends Model
{
    protected $table = 'ptrsihkebijakan';
    protected $fillable = ['unit','judul','deskripsi','files','tgl_upload'];
}
