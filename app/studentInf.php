<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class studentInf extends Model
{
    //
    use SoftDeletes;
    protected $fillable=['student_id','first_name','last_name','dob','gender','simester','facult_id','department_id','location'] ;

     public static function insertData($data){

      $value=DB::table('student_infs')->where('student_id', $data['student_id'])->get();
      if($value->count() == 0){
         DB::table('student_infs')->insert($data);
      }
   }
}
