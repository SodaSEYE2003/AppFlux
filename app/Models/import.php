<?php

namespace App\Models;

use App\Models\marchandises;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

    class import extends Model {
        use HasFactory;
        protected $fillable = ['marchandises_id', 'quantity', 'value', 'country_origin', 'departure_date', 'arrival_date'];
    
        public function Marchandise() {
            return $this->belongsTo(marchandises::class);
        }
    }

