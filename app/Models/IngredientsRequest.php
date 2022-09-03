<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientsRequest extends Model
{
    protected $table = 'ingredients_request';
    use HasFactory;
     protected $fillable = [
           'ingredients_name',
           'ingredients_quantity',
           'ingredients_status',
     ];
}