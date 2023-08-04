<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immigration extends Model
{
    use HasFactory;
    protected $table = 'immigrations';
    protected $fillable = ['fullname','email','type','country_code','passport_no','nationality','date_of_birth','sex','place_of_birth','personal_no','authority','date_of_issue','date_of_expiry'];
}