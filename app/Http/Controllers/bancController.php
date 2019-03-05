<?php

namespace App\Http\Controllers;

use App\currency;
use Illuminate\Http\Request;

class bancController extends Controller
{
    public function index(){
    	$tabel = currency::get();
		return view('index', ['arr' => $tabel]);
	}
	public function add(){
    	return view('layouts.addCurrency');
	}
	public function addRequest(Request $request){
    	$name = $request->input('name');
    	$tabe  = new currency();
		$tabwl = $tabe->create(['name'=>$name]);
		return back();
	}
	public function edit($id){
		$tabel = currency::where('id','=',$id)->get();
		return view('edit', ['arr' => $tabel]);
	}
	public function edit_request(Request $request){
    	$tabl = currency::find($request->input('id'));
		$name = $request->input('name');
		$tabl->name= $name;
		$tabl->save();
		return back();
	}
}
