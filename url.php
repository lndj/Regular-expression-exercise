<?php


$pattern = '/^((http|https):\/\/)?([a-zA-Z-]+\d*.){1,3}[a-zA-Z]+\b/';

$string = 'https://www.luoning.me   luoning.com';

if (preg_match_all($pattern, $string, $match)) {
	 echo 'The result is : '; 
	 var_dump($match); 
} else { 
	echo 'NO!'; 
} 