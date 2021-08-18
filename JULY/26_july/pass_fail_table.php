<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php $students=array();
	
	$students[]=array(
		"ID"=>"1",
		"Name"=>"student1",
		"MCQ"=>"40",
		"Descriptive"=>"37",
		"Evidence"=>"30",
	);

	$students[]=array(
		"ID"=>"2 ",
		"Name"=>"student2",
		"MCQ"=>"28",
		"Descriptive"=>"40",
		"Evidence"=>"40",
	);  ?>
	<table border="1">
		<thead>
			<tr>
			     <th>ID</th>
			     <th>Name</th>
			     <th>MCQ</th>
			     <th>Descriptive</th>
			     <th>Evidence</th>
			     <th>MCQ & Des</th>
			     <th>Result</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($students as $student){extract($student)};
			?>
			<tr>
				<td><?php echo $ID; ?></td>
				<td><?php echo $Name; ?></td>
				<td><?php echo $MCQ; ?></td>
				<td><?php echo $Descriptive; ?></td>
				<td><?php echo $Evidence; ?></td>
				<td><?php $mcq_des=(int)$MCQ+(int)$Descriptive;  ?></td>
				<td>
					<?php if($mcq_des>=70 && $Evidence>=30){
							echo "Pass"
				}else{
					echo "Fail"
				}; 
			?>
				
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
 