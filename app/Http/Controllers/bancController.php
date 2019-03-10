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

	public function btcbtc(){
		$tabel = currency::where('s_BTC','=',1)->where('f_BTC','=',1)->get();
		return view('bitcoin-to-bitcoin', ['data' => $tabel]);
	}

	public function btcbth(){
		$tabel = currency::where('s_BTC','=',1)->where('f_BСH','=',1)->get();
		return view('bitcoin-to-bitcoin', ['data' => $tabel]);
	}

	public function test(){
    	$tabel = currency::get();
		return view('test', ['arr' => $tabel]);
	}

	public function add(){
    	return view('layouts.addCurrency');
	}

	public function addRequest(Request $request){

		$forea = $request->input();

		$name  		= $request->input('name')		;
		$startCurr  = $request->input('startCurr')	;
		$finishCurr = $request->input('finishCurr')	;
		$href  		= $request->input('href')		;

		$tabe  = new currency();
		
		$insertArr = array('name'=> $name,'href'=> $href);

		foreach($startCurr as $key => $val){
			$insertArr[$val] = 1;
		}

		foreach($finishCurr as $key => $val){
			$insertArr[$val] = 1;
		}

		$tabwl = $tabe->insert($insertArr);
		
		return redirect(route('index'));
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
		return redirect(route('index'));
	}
}
