<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHome extends Model
{
    use HasFactory;
    protected $table='home';
    protected $primaryKey = 'id';
}
