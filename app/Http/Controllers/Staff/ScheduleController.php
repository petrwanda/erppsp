<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Book;
use App\Room;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        //
        $schedules = Schedule::all();
        return view('staff/schedules.index',['schedules'=>$schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($room_id=null,$book_id=null)
    {
        //
        $rooms=null;
        if(!$room_id){
            $rooms=Room::all();
        }
         $books=null;
        if(!$book_id){
            $books=Book::all();
        }
        
        return view('staff/schedules.create',['room_id'=>$room_id, 'rooms'=>$rooms,'book_id'=>$book_id,'books'=>$books]);

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

        $schedule = new Schedule();
  
        $schedule->book_id= $request->input('book_id');
        $schedule->room_id = $request->input('room_id');
        $schedule->schedule_date = $request->input('schedule_date');
        $schedule->schedule_time = $request->input('schedule_time');

        $schedule->save(); 
        return redirect()->route('schedules.index')->with('info','Schedule Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$room_id=null,$book_id=null)
    {
        //
        $rooms=null;
        if(!$room_id){
            $rooms=Room::all();
        }
         $books=null;
        if(!$book_id){
            $books=Book::all();
        }
        
        $schedule = Schedule::find($id);
        return view('staff/schedules.edit',['schedule'=> $schedule ,'room_id'=>$room_id, 'rooms'=>$rooms,'book_id'=>$book_id,'books'=>$books]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $schedule = Schedule::find($request->input('id'));
        $schedule->book_id = $request->input('book_id');
        $schedule->room_id = $request->input('room_id');
        $schedule->schedule_date = $request->input('schedule_date');
        $schedule->schedule_time = $request->input('schedule_time');
        $schedule->save(); 
        return redirect()->route('schedules.index')->with('info','Schedule Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $schedule = Schedule::find($id);
        //delete
        $schedule->delete();
        return redirect()->route('schedules.index');
    }
}
