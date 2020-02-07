<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class staffInf extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['serial_no','first_name','last_name','dob','gender','facult_id','department_id','location','role'] ;

     public static function insertData($data){

      $value=DB::table('staff_infs')->where('serial_no', $data['serial_no'])->get();
      if($value->count() == 0){
         DB::table('staff_infs')->insert($data);
      }
   }
}
