<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDataDT;

class DataDTController extends Controller
{
	public function index(){
		return view('welcome');
	}
	public function goModel($model){
		#dd($model);
		if ($model == 'rojitaLatina') {
			return view('rojita');
		}elseif($model == 'liadelicius'){
			return view('liadelicius');
		}else {
			return view('welcome');
			
		}
	}
}
