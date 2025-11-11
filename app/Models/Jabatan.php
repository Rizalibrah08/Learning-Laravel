<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'jabatan_id'; // karena bukan 'id'
    public $incrementing = true;
    protected $fillable = ['nama_jabatan', 'gaji_pokok'];
}
