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
		switch ($model) {
			case 'rojitaLatina':
			return view('rojita');
				break;
			case 'liadelicius':
			return view('liadelicius');
				break;
			case 'distribuidorbarquisimeto':
			return view('distribuidorbarquisimeto');
				break;
			default:
			return view('welcome');
				break;
		}

	}
}
