<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

if(!function_exists('_json'))
{
	function _json($status = FALSE,$message=FALSE)
	{
		if ($status) 
			exit(json_encode(array('status'=>TRUE,'message'=>$message)));
		else
			exit(json_encode(array('status'=>FALSE)));
 
	}
}
 