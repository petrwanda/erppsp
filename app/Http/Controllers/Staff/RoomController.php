<?php
namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

use App\Room;
use App\Staff;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $rooms = Room::all();
        return view('staff/rooms.index',['rooms'=>$rooms]);
    }

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
        
        return view('staff/rooms.create',['staff_id'=>$staff_id, 'staffs'=>$staffs]);

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

        $room = new Room();
  
        $room->staff_id_1= $request->input('staff_id_1');
        $room->staff_id_2 = $request->input('staff_id_2');
        $room->staff_id_3 = $request->input('staff_id_3');
        $room->room_no = $request->input('room_no');

        $room->save(); 
        return redirect()->route('rooms.index')->with('info','Room Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$staff_id=null)
    {
        //
         $staffs=null;
        if(!$staff_id){
            $staffs=Staff::all();
        }
        $room = Room::find($id);
        return view('staff/rooms.edit',['room'=> $room ,'staff_id'=>$staff_id, 'staffs'=>$staffs]);

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
        $room = Room::find($request->input('id'));
        $room->staff_id_1= $request->input('staff_id_1');
        $room->staff_id_2 = $request->input('staff_id_2');
        $room->staff_id_3 = $request->input('staff_id_3');
        $room->room_no = $request->input('room_no');
        $room->save(); 
        return redirect()->route('rooms.index')->with('info','Room Updated Successfully');

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
        $room = Room::find($id);
        //delete
        $room->delete();
        return redirect()->route('rooms.index');
    }
}
