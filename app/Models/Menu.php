<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $fillable = [
        'id_menu',
        'nama_menu',
        'deskripsi',
        'tech_stack',
        'token_akses',
        'icon_menu',
        'status',
    ];
}
