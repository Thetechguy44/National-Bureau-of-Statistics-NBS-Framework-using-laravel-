<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inec extends Model
{
    use HasFactory;
    protected $table = 'inecs';
    protected $fillable = ['fullname','email','code','voter_id_no','delim','date_of_birth','sex','occupation','address'];
}