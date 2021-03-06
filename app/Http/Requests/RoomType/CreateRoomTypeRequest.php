<?php

namespace App\Http\Requests\RoomType;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomTypeRequest extends FormRequest
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
        $rules = [
            'room_type'=>'required',
            'description'=>'required',
            'price'=>'required | numeric',
            'max_adults'=>'required | numeric',
            'max_children'=>'required | numeric',
//            'status'=>'required',
            'image'=>'required',
        ];
//        $photos = count($this->input('image'));
//        foreach(range(0, $photos) as $index) {
//            $rules['image.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
//        }

        return $rules;
    }
}
