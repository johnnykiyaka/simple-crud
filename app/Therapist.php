<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    protected $table='therapists';
    protected $fillable =['name','email','password','specialization','location'];
}
