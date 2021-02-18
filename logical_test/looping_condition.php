<?php
$j=50;
for ($i=1; $i <= $j; $i++) { 
	if ($i %5 == 0 && $i %3 == 0) {
		echo "FooBar";
	}
	elseif ($i %3 == 0) {
		echo "Foo";
	}
	elseif ($i %5 == 0) {
		echo "Bar";
	}
	else{
		echo $i;
	}
}
?>