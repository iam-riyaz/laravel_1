<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mytable extends Model
{
    use HasFactory;
    protected $table='mytable'; 
    protected $primaryKey= "mytable_id" ;
}
