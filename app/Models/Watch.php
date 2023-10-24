<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    //Trait 
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id';
    //Mass Assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'purchase_date',
        'color',
        'brand',
        'material',
        'movement', 

    ];
      
        
    }
