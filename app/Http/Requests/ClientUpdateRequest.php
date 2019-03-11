<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
          'nom'=>'required|min:5|max:20|alpha',
          'prenom'=>'required|min:5|max:20|alpha',
          'telephone'=>'required|min:10|numeric',
          'email'=>'required|email',
          'datecontact'=>'required|before_or_equal:' . date("Ymd"),
        ];
    }
}
