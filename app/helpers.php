<?php

if(!function_exists('isActive')){
	function isActive($uri, $active = 'active'){
		return call_user_func_array('Request::is', (array) $uri) ? $active : '';
	}
}