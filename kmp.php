<?php
function GetNext($t,&$next){
	$j = 0;
	$k = -1;
	$next[0] = -1;
	while($j<strlen($t)){
		if($k==-1||$t[$j] == $t[$k]){
			$j++;
			$k++;
			$next[$j]=$k;
		}
		else $k = $next[$k];
	}
	var_dump($next);
}
function KMPIndex($s,$t){
	$i = 0;
	$j = 0;
	$v;
	$next = [];
	GetNext($t,$next);
//	var_dump($next);
	while($i<strlen($s) && $j<strlen($t)){
		if($j==-1 || $s[$i]==$t[$j]){
			$i++;
			$j++;
		}else{
			$j = $next[$j];
		}
	}
	if($j>=strlen($t)) $v = $i - strlen($t);
	else $v = -1;
	return $v;
}

$s="ababcabcacbab";
$t="abab";
$k;
$k = KMPIndex($s,$t);
echo $k;
?>