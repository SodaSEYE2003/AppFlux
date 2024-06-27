<?php

namespace App\Models;

use App\Models\User;
use App\Models\douane;
use App\Models\rapport;
use App\Models\marchandises;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class flux_marchandise extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Rapport()
    {
        return $this->belongsTo(rapport::class);
    }

    public function Douane()
    {
        return $this->belongsTo(douane::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Marchandise()
    {
        return $this->hasMany(marchandises::class);
    }
}
