<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Campos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /**
     * Relación: un post pertenece a un usuario.
     * belongsTo → Post → User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: un post tiene muchas etiquetas (muchos a muchos).
     * belongsToMany → Post → Tag (tabla intermedia: post_tag)
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
