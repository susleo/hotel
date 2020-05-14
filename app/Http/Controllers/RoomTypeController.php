<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomType\CreateRoomTypeRequest;
use App\Image;
use App\RoomType;
use Brian2694\Toastr\Facades\Toastr;
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
//        Toastr::success('Messages in here', 'Title');
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
//        dd($request->all());
          $data_room = [
              'room_type'=>$request->room_type,
              'description'=>$request->description,
              'max_adults'=>$request->max_adults,
              'max_children'=>$request->max_children,
              'price'=>$request->price,
              'status'=> $request->status,
          ];
        $room_type = RoomType::create($data_room);

 ////Image

        if($request->hasfile('image')) {
            $image = $request->image;
            foreach ($image as $photo) {
//                dd($photo);
                $name = $photo->getClientOriginalName();
                $filename = $photo->move(('storage/images/room_types/'.$room_type->id), $name);
                $dataa = [
                    'room_type_id' => $room_type->id,
                    'image' => $filename,
                    'isPrimary'=> (\Arr::first($image) == $photo) ? true : false,

                ];
                Image::create($dataa);
            }
        }

          Toastr::success('Room Created Success');
        return  redirect(route('room_type.index'));
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
    public function edit(RoomType $room_type)
    {
        //
        return view('backend.room_type.add')->with('room_type',$room_type);
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

    public function imageStore(Request $request)
    {
        //
        $request->validate([
            'image'=>'required',
        ]);
        if($request->hasfile('file'))
        {

//            $image = $request->file;
//            foreach ($image as $photo) {
//                $name = $photo->getClientOriginalName();
//                $filename=  $photo->move(('storage/images/room_types/'), $name);
//                Image::create([
//                    'room_type_id' => 2,
//                    'image' => $filename
//                ]);
//                return response()->json(['uploaded' => '/storage/images/room_types/'.$name]);
//            }


        }
    }

    public function imageDelete($id)
    {
        //
       $img =  Image::find($id);
       $img->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }



}
