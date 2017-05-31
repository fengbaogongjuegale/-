<?php
	
	function QSort(& $arr,$low,$high){
		$pivotloc;
		if($low<$high){
			$pivotloc = Partition($arr,$low,$high);
			QSort($arr,$low,$pivotloc-1);
			QSort($arr,$pivotloc+1,$high);
			}
	}
	
	function QuickSort($arr){		
		$n = count($arr);
		QSort($arr,0,$n-1);
		return $arr;		
	}
	
	function Partition(& $arr,$low,$high){
		$pivotloc=$arr[$low];
		$temp;
		while($low<$high){
			while($low<$high&&$arr[$high]>=$pivotloc){			
				$high--;
			}
			$temp = $arr[$low];
			$arr[$low] = $arr[$high];
			$arr[$high] = $temp;
			while($low<$high&&$arr[$low]<=$pivotloc){
				$low++;
			}
			$temp=$arr[$low];
			$arr[$low]=$arr[$high];
			$arr[$high]=$temp;
		}
		return $low;	
	}
	$a = [4,5,32,14,5,6546,8,8678,123,434,435];	
	
	print_r(QuickSort($a));
		
		
		

?>