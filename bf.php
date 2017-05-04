<?php
function bf($s,$t){
	$i=0;
	$j=0;
	$k;
	while($i<strlen($s) && $j<strlen($t)){
		if($s[$i] == $t[$j]){
			$i++;
			$j++;

		}else{
			$i = $i - $j + 1;
			$j = 0;;
		}
		
	}	
	if($j >= strlen($t)) $k = $i - strlen($t);
	else $k = -1;
	return $k;	
}
$str1 = "abaabcabclkjlkff";
$str2 = "abc";
echo bf($str1,$str2);
?>