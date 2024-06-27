<?php

namespace App\Models;

use App\Models\rapport;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class administrateur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Rapport()
    {
        return $this->HasMany(rapport::class);
    }

}
