<?php

/**
 * @author Luo Ning <luoning@luoning.me>
 * 正则表达式练习之Email
 *
 */
$pattern = '/\w+@([a-zA-Z0-9-]+.){1,2}(com|cn|org|gov.cn|net|edu.cn|me|club)/';

$string = 'luoning@luoning.me ssdas  [947700@qq.com';

if (preg_match_all($pattern, $string, $match)) {
	 echo 'The result is : '; 
	 var_dump($match); 
} else { 
	echo 'NO!'; 
} 