<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // pour indiquer que le post ne peut avoir qu'un rédacteur (user)
    public function user()
{
    return $this->belongsTo(User::class);
}
    // indique quels champs vont être modifiables par le user
    protected $fillable = [
        'description',
        'img_url',
        'user_id',
    ];

}



