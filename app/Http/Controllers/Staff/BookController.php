<?php


namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\Book;
use Illuminate\Http\Request;
use DB;


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
        $books=Book::all();
        return view('staff/book.index', compact('books'));
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
    public function edit($id)
    {
        //
        $book = Book::find($id);
        return view('staff.book.edit', compact('book','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $book = Book::find($id);
        // $book->status= $request->get('status');
        // $book->update();
        Book::where('id', $id)
          ->update(['status' => $request->get('status')]);

          if($request->get('status')=="Approved"){
             $stage = DB::table('books')->where('id', $id)
                    ->value("stage");
            
            if ($stage=="proposal") {
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "chapter one"]);
            }
             if ($stage=="chapter one") {
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "chapter two"]);
            }
            if ($stage=="chapter two") {
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "chapter three"]);
            }
            if ($stage=="chapter three"){
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "chapter four"]);
            }
                if ($stage=="chapter four"){
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "chapter five"]);
            }
            if ($stage=="chapter five") {
                # code...
                 Book::where('id', $id)
                ->update(['stage' => "Accountent"]);
            }
            return redirect('/staff/book');
        
          }else{
            return redirect('/staff/book');

          }
          
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
