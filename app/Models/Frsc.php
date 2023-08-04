<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frsc extends Model
{
    use HasFactory;
    protected $table = 'frscs';
    protected $fillable = ['fullname','email','license_no','category','date_of_birth','address','sex','height','1st_iss_state','blood_group','facial_mark','glasses','replace_no','renewal_no','next_of_kin','date_of_1st_ISS','ISS','EXP'];
}