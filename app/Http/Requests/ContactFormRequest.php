<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

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
			'firstname' => 'required',
			'lastname' => 'required',
    		'email' => 'required|email',
    		'objet' => 'required',
    		'message' => 'required',
    		'url',
    		'file' => 'mimes:jpeg,bmp,png',
    		'copie',
		];
	}

}
