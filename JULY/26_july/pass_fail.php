<?php 
$students=array();
	
	$students[]=array(
		"Name"=>"student1",
		"ID"=>"1",
		"MCQ"=>"40",
		"Descriptive"=>"37",
		"Evidence"=>"30",
	);

	$students[]=array(
		"Name"=>"student2",
		"ID"=>"2 ",
		"MCQ"=>"28",
		"descriptive"=>"40",
		"Evidence"=>"40",
	);
	foreach ($students as $student){
		extract($student);

		if ($mcq>=70 && $descriptive >=30){
			$t=$mcq+$descriptive;
			echo "$name : $t";
		}else{
			echo "Fail" ;
		}
	}

 ?>