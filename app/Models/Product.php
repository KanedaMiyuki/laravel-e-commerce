<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function stock(){
        return $this->hasOne(Stock::class);
    }
}
