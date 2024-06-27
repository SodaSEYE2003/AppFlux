<?php

namespace App\Models;

use App\Models\flux_marchandise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class douane extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function FluxMarchandise()
    {
        return $this->hasMany(flux_marchandise::class);
    }
}
