<?php

namespace Api\Requests;

use App\Http\Requests\Request;

class DogRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name' => 'required|max:100',
	    	'age' => 'required|numeric|between:0,40'
    	];
	}
}