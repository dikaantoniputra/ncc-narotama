<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $rules = [
        'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
