<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipd extends Model
{
    protected $fillable = ['hospital', 'date', 'ipd', 'file'];
    use HasFactory;
}
