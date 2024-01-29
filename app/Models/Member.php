<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    function getGroup(){
        return $this->hasOne('App\Models\Group','groupId','grpId');
    }
}
