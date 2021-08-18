
<?php 
if(isset($_POST['submit']))
{

  $num=$_POST['num'];
  $prime=0;

  
    for($i=2;$i<$num;$i++)
    {
      $prime=0;
      if(($num%$i)==0)
      {
      break;  
      }
      $prime=1;
    } 
    if($prime==1)
    {
      echo "<h3> $num  is a Prime Number</h3>";
    }
    else
    {
      echo "<h3> $num is not a Prime number </h3>"; 
    }
}
?>
<!DOCTYPE html?>
<html?>
<head>
  <title>Prime Number</title>
</head>
<body>
  <form method="post">
      
    <table>
      <tr>
        <td>Prime Number Checking: </td>
        <td><input type="text" name="num" placeholder="Enter Your Number"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="CHECK">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
