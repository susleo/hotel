<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomType\CreateRoomTypeRequest;
use App\Image;
use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.room_type.index')
            ->with('room_types',RoomType::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.room_type.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoomTypeRequest $request)
    {
        //
          $data_room = [
              'room_type'=>$request->room_type,
              'description'=>$request->description,
              'max_adults'=>$request->max_adults,
              'max_children'=>$request->max_children,
              'price'=>$request->price,
              'status'=>true,
          ];
        $room_type = RoomType::create($data_room);

 ////Image
        if($request->hasfile('image'))
        {
          $image = $request->image;
          $name = $image->getClientOriginalName();

         $filename=  $image->move(('storage/images/room_types'), $name);
          Image::create([
          'room_type_id' => $room_type->id,
          'image' => $filename
                ]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
