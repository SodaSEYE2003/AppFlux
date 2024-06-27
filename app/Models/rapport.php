<?php

namespace App\Models;

use App\Models\User;
use App\Models\analyste;
use App\Models\administrateur;
use App\Models\flux_marchandise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rapport extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Analyste()
    {
        return $this->belongsTo(analyste::class);
    }

    public function Administrateur()
    {
        return $this->belongsTo(administrateur::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function FluxMarchandise()
    {
        return $this->hasMany(flux_marchandise::class);
    }
}
