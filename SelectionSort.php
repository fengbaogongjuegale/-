<?php
	
	function SelectionSort($arr){
		$i;
		$j;
		$temp;
		$n = count($arr);
		for($i=0;$i<$n-1;$i++){
			for($j=$i;$j<$n;$j++){
				if($arr[$j]<$arr[$i]){
					$temp=$arr[$j];
					$arr[$j]=$arr[$i];
					$arr[$i]=$temp;
				}
			}			
		}
		return $arr; 		
	}
	
	$a = [4,5,32,14,5,6546,8,8678,123,434,435];	
	
	print_r(SelectionSort($a));

?>