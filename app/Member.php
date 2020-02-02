<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{


    protected $table = "members";

    protected $fillable = ['first', 'last', 'phone', 'institution', 'programme', 'district', 'country'];
}
