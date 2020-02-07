<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Schedule extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['book_id','room_id', 'schedule_date','schedule_time'];


}
