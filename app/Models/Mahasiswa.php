<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Mahasiswa extends Model
{
    use HasFactory;

    public $table = 'mahasiswas';
    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

 


}
