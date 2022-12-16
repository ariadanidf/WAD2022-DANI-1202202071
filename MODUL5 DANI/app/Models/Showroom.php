<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    public $table = 'showroom';
    protected $guarded = ['id'];
    public $timestamps = false;
    
}
