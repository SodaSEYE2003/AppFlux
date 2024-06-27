<?php

namespace App\Models;

use App\Models\rapport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class analyste extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Rapport()
    {
        return $this->hasMany(rapport::class);
    }
    

}
