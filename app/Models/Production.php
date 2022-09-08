<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = 'production';
    use HasFactory;
    protected $fillable = [
            'bread_name',
            'price',
     ];
}
