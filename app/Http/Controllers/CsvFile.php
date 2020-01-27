<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;

use App\User;

class CsvFile extends Controller
{
    function index(){
        $data = User::latest()->paginate(10);
        return view('csv_file_pagination', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    public function csv_export(){
        return Excel::download(new CsvExport, 'sample.csv');
    }

    public function csv_import(Request $request){
        // Excel::import(new CsvImport, request()->file('file'));
        // return back();




        $request->validate([
            'file' => 'required'
        ]);

        $path = $request->file('file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['name' => $value->name, 'email' => $value->email, 'password'=> $value->password];
            }

            if(!empty($arr)){
                User::insert($arr);
            }
        }

        return back()->with('success', 'Insert Record successfully.');
       

    }
}
