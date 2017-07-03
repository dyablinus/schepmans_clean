 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
if ( ! function_exists('generateToken'))
{
    
   function generateToken($char = 8,$timestamp = true){
		$valid_chars = ['a','b','c','A','B',0,1];
		$listAlpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		
		//random dans un foreach
		if($timestamp === true){
			$token = time ();
		}else{
			$token ='';
		}
		
		for($i=0;$i<$char;$i++){
			//$token .= $valid_chars[rand(0,count($valid_chars)-1)];
			 $rand = rand(0, strlen($listAlpha) - 1);
            $token .= substr($listAlpha, $rand, 1);
		}
		echo $token;
	}

}