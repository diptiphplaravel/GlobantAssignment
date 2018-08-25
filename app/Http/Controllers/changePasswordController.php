<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;
use Auth;
use Hash;
use Redirect;
class changePasswordController extends Controller
{
	/*
	 * Function to display change password page
	 * 
	 */
	public function changePassword()
	{		
		return view('changePassword');
	}
	
	/*
	 * Function to store new password and redirect user to login page.
	 * 
	 */
	public function store_pwd(Request $request)
	{
		$this->validate($request, [
				'old_password' => 'required',
				'password' => 'required|string|min:6|confirmed',
				]);
		
		$input = $request->all();
		$user = User::find(auth()->user()->id);
		if(!Hash::check($input['old_password'], $user->password))
		{
			
			Session::flash('errormsg', "Old Password is Incorrect");
			return Redirect::back();
		}		
		else
		{
				$new_pwd = bcrypt($request->password_confirmation);
				DB::table('users')
				->where('id',auth()->user()->id)
				->update(['password'=>$new_pwd]);
				
				Session::flash('successmsg', 'Password Updated Successfully!');
				return redirect('/login');
		}
		
	}
}
