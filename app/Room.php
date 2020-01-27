<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Room extends Model
{
    //
        use SoftDeletes;
        protected $fillable = ['staff_id_1','staff_id_2', 'staff_id_3','room_no'];

}
