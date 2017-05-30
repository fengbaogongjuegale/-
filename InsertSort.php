<?php
	/**
	 * 插入排序
	 */
	function InsertSort($array){
		$i;$j;
		$temp;
		$n = count($array);
		for($i=1;$i<$n;$i++){	
			if($array[$i]<$array[$i-1]){
				$temp = $array[$i];
				for($j=$i-1;$temp<$array[$j]&&$j>=0;$j--){
					$array[$j+1]=$array[$j];
				}
				$array[$j+1] = $temp;
			}
		}
		return $array;	
	}	
	$a = [4,5,32,14,5,6546,8,8678,123,434,435];
	
	print_r(InsertSort($a));

?>