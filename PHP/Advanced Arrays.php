<!DOCTYPE html>
<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      
      
      $me = array('hair' => 'light brown',
                    'skin tone' => 'light');
     foreach ($me as $feature=>$colour) {
  echo 'My ' . $feature . ' is '.$colour . '. ';
}  
      $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('6 of Diamonds',6),
                      array('7 of Diamonds',7));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[3][1] . '!';
	  
	  $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        echo $myArray[3];
        echo '<br/>';
        echo $myAssocArray['doors'];
        echo '<br/>';
        echo $myAssocArray['year'];
       ?>
    </p>
  </body>
</html>