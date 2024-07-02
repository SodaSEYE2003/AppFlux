<?php

namespace App\Models;

use App\Models\douane;
use App\Models\import;
use App\Models\export;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



    class marchandises extends Model {
        use HasFactory;
            
        use HasFactory;
        protected $guarded = ['id'];
    
        public function Rapport()
        {
            return $this->hasMany(rapport::class);
        }
    }

