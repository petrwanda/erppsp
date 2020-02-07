<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;

use App\studentInf;
use Illuminate\Http\Request;
use DB;
use Session;

class StudentInfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = StudentInf::all();
        return view('staff/student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentInf  $studentInf
     * @return \Illuminate\Http\Response
     */
    public function show(studentInf $studentInf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studentInf  $studentInf
     * @return \Illuminate\Http\Response
     */
    public function edit(studentInf $studentInf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studentInf  $studentInf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentInf $studentInf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studentInf  $studentInf
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentInf $studentInf)
    {
        //
    }

     public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             if($i == 0){
                $i++;
                continue; 
             }
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "student_id"=>$importData[0],
               "first_name"=>$importData[1],
               "last_name"=>$importData[2],
               "gender"=>$importData[3],
               "simester"=>$importData[4],
               "location"=>$importData[5],
               "dob"=>$importData[6],
               "facult_id"=>$importData[7],
               "department_id"=>$importData[8]
             );
            StudentInf::insertData($insertData);

          }

          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    }

    // Redirect to index
        return redirect('/staff/student');
  }
}
