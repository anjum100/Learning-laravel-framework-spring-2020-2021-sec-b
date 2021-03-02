<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //use HasFactory;
    protected $table = 'e_marketing';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}