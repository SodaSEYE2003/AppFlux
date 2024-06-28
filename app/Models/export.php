<?php

namespace App\Models;

use App\Models\marchandises;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class marchandises extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    class export extends Model {
        use HasFactory;
        protected $fillable = ['marchandises_id', 'quantity', 'value', 'main_destinations', 'departure_date', 'arrival_date'];
        public function Marchandise() {
            return $this->belongsTo(marchandises::class);
        }
    }
}
