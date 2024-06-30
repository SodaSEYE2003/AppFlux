<?php

namespace App\Models;

use App\Models\douane;
use App\Models\import;
use App\Models\export;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



    class marchandises extends Model {
        use HasFactory;
      /*  protected $fillable = ['name'];
    
        public function imports() {
            return $this->hasMany(import::class);
        }
    
        public function exports() {
            return $this->hasMany(export::class);
        }
        public function douanes() {
            return $this->hasMany(douane::class);
        }*/
        protected $table = 'marchandises';
    }

