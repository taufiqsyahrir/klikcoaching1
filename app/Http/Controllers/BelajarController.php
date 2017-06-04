<?php

namespace App\Http\Controllers;

use App\Http\Requests\BelajarRequest;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BelajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(){
        $rooms = Room::all();
        //return $rooms;
        return view('belajar/index', compact('rooms'));
    }

    public function createroom()
    {
        return view('belajar/createroom');
    }

    public function storeroom(BelajarRequest $request){
        //public function store(Request $request){
        //return $request->input(); //ini menuju /petitions menggunakan metode post
        $input = $request->input();
        $room = New Room($input);

        $room->save();

        DB::table('roomusers')->insert(
            ['user_id' => Auth::user()->id, 'room_id' => $room->id]
        );


        return redirect(url('belajar')); //ini menuju /petitions menggunakan metode get
    }
}
