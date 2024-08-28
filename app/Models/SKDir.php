<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKDir extends Model
{
    protected $table = 'skdirektur';
    protected $fillable = ['id','unit','judul','deskripsi','files','tgl_upload'];
}
