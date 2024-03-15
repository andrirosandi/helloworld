<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function register($input)
    {
    	try {
    		$val = Validator::make($input,[
		        'userid' => ['required','alpha_dash','unique:App\Models\User,userid'],
		        'email' => ['required','email','unique:App\Models\User,email'],
		        'name' => 'required|string',
		        'password' => ['required',Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
		        'password_confirm' => ['required','same:password'],
		        'usergroup_id' => ['required','exists:App\Models\Usergroup,id']
	    	]);
	    	$validated = $val->validate();
    	} catch (ValidationException $e) {
    		return response()->json([
    			'success' => false,
    			'message' => "Register Failed",
    			'errors' => $e->validator->errors()->all()
    		]);
    	}
    	try {
    		$user = User::create([
	    		'userid' => $input['userid'],
	    		'name' => $input['name'],
	    		'email' => $input['email'],
	    		'password' => $input['password'],
	    		'usergroup_id' => $input['usergroup_id'],
	    		'blocked' => 0,
	    		'systemadmin' => 0,
	    	]);
			return response()->json([
    			'success' => true,
    			'message' => "Register Success",
    			'data' => $user    			
    		]);
    	} catch (\Illuminate\Database\QueryException $e) {
    		return response()->json([
    			'success' => false,
    			'message' => "Register Failed",
    			'errors' => "Internal Server Error"
    			// 'errors' => $e->getMessage()
    		]);
    	}
    }
}
