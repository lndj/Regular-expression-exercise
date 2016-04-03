<?php

/**
 * @author Luo Ning <luoning@luoning.me>
 * 正则表达式练习之Phone(Mobile)
 *
 */
$pattern = '/^(133|153|180|181|189|177|173|130|131|132|155|156|145|185|186|176|185|134|135|136|137|138|139|150|151|152|158|159|182|183|184|157|187|188|147|178|184|170|171)\d{8}/';

$string = '15101239065 15182787211 89891 ';

if (preg_match_all($pattern, $string, $match)) {
	 echo 'The result is : '; 
	 var_dump($match); 
} else { 
	echo 'NO!'; 
} 