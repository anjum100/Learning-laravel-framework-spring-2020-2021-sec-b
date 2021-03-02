<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //use HasFactory;
    protected $table = 'virtual_store';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}