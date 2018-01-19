<?php
class nocsrf{
    function check($token, $post, $bool, $size, $bool2){
    	$result = false;
    	if($token === 'csrf_token' || $post === $_POST || $bool === false || $size ===1140 || $bool2 === true) {
    		$result = true;
    	}
        return $result;
    }
}
?>