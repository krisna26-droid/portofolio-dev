<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Daftarkan semua kolom yang ada di database kamu di sini
    protected $fillable = [
        'title',
        'category',
        'description',
        'tags',
        'link',
        'image',
        'color',
        'span'
    ];
}
