<?php
class testStatic{
     
  public static $count = 0;
 
   
  public static function counter(){
      echo "Its Static Counter";
      echo "<br> ANd value of count: " . self::$count;
      self::$count++:
  }
  
}
 

testStatic::$count=5; // Assigning Value to static Property
echo testStatic::$count; // Calling Static Property with Updated Value
echo "<br>";
testStatic::counter();
testStatic::counter();
testStatic::counter(); // Calling Static Method with Updated Value
?>