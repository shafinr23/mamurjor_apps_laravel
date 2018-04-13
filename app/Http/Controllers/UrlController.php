<?php namespace new_project_shafin\Http\Controllers;

use new_project_shafin\Http\Requests;
use new_project_shafin\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UrlController extends Controller {

	//
	public function index(Request $Request){
		// path 
		$shafin = $Request-> path();
		echo $shafin.'<br/>';
		// is 
		$shafin_is = $Request-> is('mama/*');
		echo $shafin_is;
		//url 
		$shafin_url = $Request-> url();
		echo $shafin_url;


		echo "hello world 2018";
	}

}



