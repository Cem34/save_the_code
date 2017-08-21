<?php

namespace SaveTheCode\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function evalCode(){
    	// A very simple PHP example that sends a HTTP POST to a remote site
		//
		//header('Content-Type: application/json');
		$ch = curl_init();

		//echo $str;
		$path = $_GET['path'];
		$token = $_GET['token'];
		curl_setopt($ch, CURLOPT_URL,"http://www.programmr.com/php_files/ExerciseAPI.php?p_url=".urlencode($path)."&token=".urlencode($token)."&apiKey=b70949c52a026e488b661c9a094bb33e");

		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		curl_close ($ch);

		// further processing ....
		echo $server_output;
		exit;
    }
}