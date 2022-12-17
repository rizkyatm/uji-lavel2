<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    public $table = 'gurus';
    protected $guarded = [];

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
