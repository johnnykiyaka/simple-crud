<?php

namespace App;

use App\John;
use Illuminate\Database\Eloquent\Model;

class John extends Model
{
    protected $table='johns';

    protected $fillable =['title','subtitle','description'];
}
