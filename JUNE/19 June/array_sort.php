<?php 
$cities=array("Dhaka","Sylhet","Barisal","Comilla");

sort($cities);
echo "<pre>";
print_r($cities);


$num=array(100,1,3,2,10,14,13);
sort($num);
print_r($num);

 ?>
 <?php 
$num=array(100,1,3,2,10,14,13);
 rsort($num);
 print_r($num); ?>
 <?php 
$num=array(100,1,3,2,10,14,13);
 arsort($num);
 print_r($num); ?>
 <?php 
$num=array(100,1,3,2,10,14,13);
 asort($num);
 print_r($num); ?>

 <?php 
 $photos=array("Pic1.jpg","Pic10.jpg","Pic2.jpg","Pic20.jpg","Pic40,jpg");

 sort($photos);
 print_r($photos);

 natsort($photos);
 print_r($photos);

  ?>
  <?php 
   $photos=array("Pic1.jpg","pic10.jpg","PIc2.jpg","PIC20.jpg","piC40,jpg");
 natcasesort($photos);
  print_r($photos);


   ?>
   <?php 
   $cities=array("Dhaka"=>100,"Sylhet"=>50,"Comilla"=>40,"Barguna"=>45);

   ksort($cities);
   print_r($cities);

    krsort($cities);
   print_r($cities);
 ?>