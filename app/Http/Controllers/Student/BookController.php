<?php


namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use App\Book;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Staff;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student=Auth::guard('student')->user()->student_id;
        $books=DB::table('books')->where('student_id', $student)->get();
        return view('student/book.index', compact('books'));
       
    }

    // public function student(){
    //     $student=Auth::guard('student')->user()->student_id;
    //     $student_id=DB::table('books')->where('student_id', $student)->value('student_id');
    //     return view('student/book', compact('student_id'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($staff_id=null)
    {
        //
         $staffs=null;
        if(!$staff_id){
            $staffs=Staff::all();
        }
        
        return view('student/book.create',['staff_id'=>$staff_id, 'staffs'=>$staffs]);
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
        $book = new Book();
  
        $book->title= $request->input('title');
        $book->file = $request->input('file');
        $book->description= $request->input('description');
        $book->staff_id = $request->input('staff_id');
        $book->student_id = Auth::guard('student')->user()->student_id;

        $book->save(); 
        return redirect()->route('book.index')->with('info','Book Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$staff_id=null)
    {
        //
           $staffs=null;
        if(!$staff_id){
            $staffs=Staff::all();
        }
        $book = Book::find($id);
         return view('student/book.edit',['book'=> $book ,'staff_id'=>$staff_id, 'staffs'=>$staffs]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $book = Book::find($request->input('id'));
        $book->title= $request->input('title');
        $book->file = $request->input('file');
        $book->description= $request->input('description');
        $book->staff_id = $request->input('staff_id');
        $book->student_id = Auth::guard('student')->user()->student_id;

        $book->update();  
        return redirect()->route('book.index')->with('info','Book Updated Successfully');
          
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $book = Book::find($id);
        //delete
        $book->delete();
        return redirect()->route('book.index');
    }
}
