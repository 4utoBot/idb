<?php 


class Student{
	private $data;
	public function __construct($file){
    	
    	$data = file($file);
    	$this->data =  $data;
    	// return $this->data;
     //     echo "<pre>";
    	// print_r($data);

    } 
   public function result($stid){
   	 foreach($this->data as $item){
   	 	list($id, $name,$batch,$result) = explode(",", $item);
   	 	if($id == $stid){
   	 		echo "ID:". $id ."<br>". "Name:". $name ."<br>"."Batch:". $batch ."<br>"."Result:" .$result . "<br>";
   	 		break;
   	 	}
   	 }
   	

   }

}

$stobj = new Student("result.txt");



 ?>

<?php 

if(isset($_GET['submit'])){
	$id = $_GET['stid'];
	$stobj->result($id);
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Student Data</title>
</head>
<body>
        <form action="">
       <select name="stid" id="">
              <option value="1264051">Kowshar</option>
              <option value="1264052">Hasan</option>
        <option value="1264053">Saiful</option>

       </select>
       <input type="submit" name="submit" value="show result">
 </form>
</body>
</html>
