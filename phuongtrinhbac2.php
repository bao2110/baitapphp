<?php
$a = 2;
$b = 4;
$c = 5;

function giai_pt_bac_2($a, $b, $c)
{
	echo "Phuong trinh: " .$a ."x2 + " . $b. "x + ".$c.	 "=0";
	if ($a==0){
		if($b==0){
			echo "Phuong trinh khong co nghiem";
		}
		else
		{
			echo "phuong trinh co 1 nghiem"."x= ".(((-1)*$c)/$b);
		}
	}else{
		$delta = $b * $b - 4 * $a * $c;
		$x1 = "";
		$x2 = "";
		if ($delta > 0) {
			$x1 = (- $b + sqrt ( $delta )) / (2 * $a);
			$x2 = (- $b - sqrt ( $delta )) / (2 * $a);
			echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
		} else if ($delta == 0) {
			$x1 = (- $b / (2 * $a));
			echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
		} else {
			echo ("Phương trình vô nghiệm!");
		}
	}
}
giai_pt_bac_2 (1,-3,2);
