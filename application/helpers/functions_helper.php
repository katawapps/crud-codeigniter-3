<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

if(!function_exists('_build_json'))
{
	function _build_json($status = FALSE,$message=FALSE)
	{
		if ($status) 
			exit(json_encode(array('status'=>TRUE,'message'=>$message)));
		else
			exit(json_encode(array('status'=>FALSE,'message'=>$message)));
 
	}
}
 
if (!function_exists('_is_ajax_request')) {

    function _is_ajax_request($_return = FALSE) {

        $CI = &get_instance();

        if (!$CI->input->is_ajax_request())
            if (!$_return)
                _build_json();
            else
                return FALSE;

        return TRUE;
    }

}
 