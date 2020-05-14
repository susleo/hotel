<?php

namespace App\Http\Requests\RoomType;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'room_type'=>'required',
            'description'=>'required',
            'price'=>'required | numeric',
            'max_adults'=>'required | numeric',
            'max_children'=>'required | numeric',
            'image'=>'image|mimes:jpeg,jpg,bmp,png|size:2000 '
        ];
    }
}
