<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;

use App\staffInf;
use Illuminate\Http\Request;
use Session;

class StaffInfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $staffs = StaffInf::all();
        return view('staff/staff.index',['staffs'=>$staffs]);
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
     * @param  \App\staffInf  $staffInf
     * @return \Illuminate\Http\Response
     */
    public function show(staffInf $staffInf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staffInf  $staffInf
     * @return \Illuminate\Http\Response
     */
    public function edit(staffInf $staffInf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staffInf  $staffInf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staffInf $staffInf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staffInf  $staffInf
     * @return \Illuminate\Http\Response
     */
    public function destroy(staffInf $staffInf)
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
               "serial_no"=>$importData[0],
               "first_name"=>$importData[1],
               "last_name"=>$importData[2],
               "gender"=>$importData[3],
               "location"=>$importData[4],
               "dob"=>$importData[5],
               "facult_id"=>$importData[6],
               "department_id"=>$importData[7],
               "role"=>$importData[8]

             );
            StaffInf::insertData($insertData);

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
        return redirect('/staff/staff');
  }
}
