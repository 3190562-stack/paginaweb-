<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * Campos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Relación: una etiqueta pertenece a muchos posts (muchos a muchos).
     * belongsToMany → Tag → Post (tabla intermedia: post_tag)
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
