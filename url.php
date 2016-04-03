<?php

/**
 * @author Luo Ning <luoning@luoning.me>
 * 正则表达式练习之Url --Maybe not complete
 *
 */

$pattern = '/^((http|https):\/\/)?([a-zA-Z-]+\d*.){1,3}[a-zA-Z]+\b/i';

$string = 'https://www.luoning.me   luoning.com';

if (preg_match_all($pattern, $string, $match)) {
	 echo 'The result is : '; 
	 var_dump($match); 
} else { 
	echo 'NO!'; 
} 