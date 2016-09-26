<?php 

$a=2;
$b=3;
$aux=0;

for ($i=0; $i < $a+$b; $i++) { 
	if($a>$b){
		$a--;
		$aux=$b;
	}else{
		$b--;
		$aux = $a;
	}
	echo $aux;
}

 ?>