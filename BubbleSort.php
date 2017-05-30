<?php
	/**
	 * 冒泡排序
	 * 每一趟都有一个最大或最小的数浮到顶端，并且带动一部分较大或较小的数上浮
	 */
	function BubbleSort($a){
		$i;
	    $j;
	    $temp;
	    $change;
	    $n = count($a);
	    for($i=$n-1;$i>=0&&$change==0;$i--){
	    	$change=1;
	    	for($j=0;$j<$i;$j++){
	    		if($a[$j]>$a[$j+1]){
	    			$change = 0;
	    			$temp = $a[$j];
	    			$a[$j]=$a[$j+1];
	    			$a[$j+1]=$temp;	    			
	    		}	    		
	    	}
	    }
	    return $a;			
	}
	
	$a = [4,5,32,14,5,6546,8,8678,123,434,435];
	
	print_r(BubbleSort($a));
	
	
	
	
	

?>