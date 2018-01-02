<?php

if (!function_exists('canAccess')) {
    function canAccess($permission = null)
    {
        $isAdmin = isSuperAdmin();

        $permissions = empty(Session::get('data.permissions')) === false ? Session::get('data.permissions') : [];

        if($isAdmin){
            return true;
        }
        if(empty($permissions)){
        	return false;
        }

        return !empty($permission) && in_array($permission, $permissions);
    }
}

if(!function_exists('isSuperAdmin')) {
	function isSuperAdmin()
	{
		if(empty(Session::get('data.executive_details.is_super_admin') === false) && Session::get('data.executive_details.is_super_admin') != 0) {
			return true;
		}

		return false;
	}
}

if (!function_exists('aesDecrypt')) {

    function aesDecrypt($text)
    {
        $salt = config('api.key');
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
    }
}