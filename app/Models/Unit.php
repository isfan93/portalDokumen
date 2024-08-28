<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'mst_unit';
    protected $fillable = ['id','nama','ext_telepon','pimpinan','jabatan','lokasi','manajer'];
}
