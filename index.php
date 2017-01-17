<?php

/*Список необходимых изображений*/
include 'array1.php' ;
/*Общий список изображений*/
include 'array2.php' ;
// $filename = '/images/air-conditioning/';


 $filenames = ( array_diff( $array2, $array1 ));


print_r(scandir('img/'));

// print_r (array_values(scandir('img/model'))) ;

 foreach ($filenames as $filename) {
 	unlink( substr($filename, 1));
 }
 $pathFile = scandir('img/');

print_r(scandir('img/'));
 $filenames = (array_diff( scandir('img/'), $array1  ));
 print_r ($filenames);
foreach ($filenames as $filename) {
	unlink( $filename);
}
?> 