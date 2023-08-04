<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nimc extends Model
{
    use HasFactory;
    protected $table = 'nimcs';
    protected $fillable = ['fullname','email','gender','tracking_id','national_id_no','address'];
}