<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasTranslations;

    protected $table = 'menu'; 
    protected $primaryKey = 'id_menu';
    public $translatable = ['nama_menu', 'deskripsi', 'fitur']; 
    public $timestamps = false;

    protected $fillable = [
        'nama_menu',
        'deskripsi',
        'fitur',
        'tech_stack',
        'token_akses',
        'icon_menu',
        'status',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'status' => 'boolean',
    ];
}
