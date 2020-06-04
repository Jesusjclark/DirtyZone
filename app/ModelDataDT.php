<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDataDT extends Model
{
    protected $table = "data_dt";
    protected $primaryKey = "id";
    protected $fillable = ['day','hour','tipo_cambio','divisa'
    ];
    public function decode(){
    $var=json_decode($this->tipo_cambio);
    	return $var;
    }
    public static function renew(){
    	$url = "http://s3.amazonaws.com/dolartoday/data.json";
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_POST, 0);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     	$response = curl_exec ($ch);
     	$err = curl_error($ch);  //if you need
     	curl_close ($ch);
		$response = mb_convert_encoding( $response, "UTF-8" );
     	$obj=json_decode($response);

		$hour=date('h:i:s');
		$usd = new ModelDataDT();
		$usd->hour=$hour;
		$changes=[];
		$divisas=[0 => 'USD',1 => 'EUR'];
		foreach ($divisas as $key => $value) {
			$changes[$key]["DOLARTODAY"] = $obj->$value->dolartoday;
			$changes[$key]["IMPLICITO"] = $obj->$value->efectivo;
			$changes[$key]["DICOM"] = $obj->$value->sicad2;
			$changes[$key]["BITCOIN"] = $obj->$value->sicad1;
			$changes[$key]["DIPRO"] = $obj->$value->cencoex;
		}
		foreach ($divisas as $key => $value) {
			$data= new ModelDataDT();
			$data->hour=$hour;
			$data->day=$obj->_timestamp->fecha_corta;
			$data->tipo_cambio=json_encode($changes[$key]);
			$data->divisa=$value;
			$data->save();
		}
	}
}
