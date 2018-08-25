<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use iio\libmergepdf\Merger;
use DB,Auth;
use PDF,Mail,Session;
use App\purchaseOrder;
class CommonActivityController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('revalidate');
	}
	/*
	 *  Function is used to log all the activities
	 */
    public function Log_Records($activity_name,$all_values,$request)
    {
    	DB::table('logger')->insert([
    	'Event_Name'=>$activity_name,
    	'User_ID'=>Auth::user()->id?Auth::user()->id:0,
    	'All_Values'=>$all_values,
    	'IP_Address'=>$request->ip()
    	]);
    }
    /*
     *  Function displays welcome page
     */
    public function displayLandingPage()
    {
    	return view('welcome');
    }    
}
