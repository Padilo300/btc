<?php

namespace App\Http\Controllers;

use App\currency;
use App\review;
use Illuminate\Http\Request;



class bancController extends Controller
{

	
	public function all(){ 
    	$tabel = currency::get();
		return view('index', ['arr' => $tabel]); 
	}

	public function btcbtc(Request $request){
		//$tabel = currency::where('s_BTC','=',1)->where('f_BTC','=',1)->get();
		//return view('bitcoin-to-bitcoin', ['data' => $tabel]);

		$data 	= $request->All(); 
		$start  = '';
		$finish = '';

		if(isset($data['start'])  && isset($data['finish']) ){

			try{
				$tabel 	= currency::where($data['start'],'=',1)->where($data['finish'],'=',1)->get(); 
			}catch (Exception $e){

			}

			$start	= str_replace('s_','',$data['start'])	;
			$finish	= str_replace('f_', '',$data['finish'])	;
		}else{
			$tabel = currency::where('s_BTC','=',1)->where('f_BTC','=',1)->get();
		}

		return view('bitcoin-to-bitcoin', [
											'data' 		=> $tabel	, 
											'start' 	=> $start	, 
											'finish' 	=> $finish	]); 
	}

	public function list(){
		$tabel = currency::all();
		return view('list',['data'=> $tabel]);
	}

	public function partner(){
		return view('partner');
	}
	public function appe(){
		return view('appe');
	}
	public function help(){
		return view('help');
	}
	public function faq(){
		return view('faq');
	}
	public function contacts(){
		return view('contacts');
	}
	public function review($id){

		$currency 		= currency::where('id','=',$id)->get();
		$tabel 			= review::get()			;
		$reviewText  	= review::pluck('text')	;
		$reviewLimit 	= $currency[0]['review'];
		return view('review', ['data' => $tabel,'currency' => $currency,'reviewText'=>$reviewText,'reviewLimit'=>$reviewLimit, 'i' => 1]);
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

		$coef  		= $request->input('coef')		;
		$rezerv  	= $request->input('rezerv')		;
		$review  	= $request->input('review')		;

		$tabe  = new currency();
		
		$insertArr = array(
							'name'				=> $name,
							'href'				=> $href,
							'course_management'	=> $coef,
							'rezerv'			=> $rezerv,
							'review'			=> $review);

		foreach($startCurr as $key => $val){
			$insertArr[$val] = 1;
		}

		foreach($finishCurr as $key => $val){
			$insertArr[$val] = 1;
		}

		$tabwl = $tabe->insert($insertArr);
		
		return redirect(route('add_obj'));
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
