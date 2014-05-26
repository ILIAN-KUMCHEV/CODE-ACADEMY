<!DOCTYPE html
<html>
  <p>
    <?php
   $myname= "ILIAN";
   $partial= substr($myname, 0, 2);
   print $partial;
    ?>
  </p>
  <p>
    <?php
   $uppercase=strtoupper($myname);
    print $uppercase;
    ?>
  </p>
  <p>
    <?php
  $lowercase=strtolower($myname);
    print $lowercase;
    ?>
  </p>
  <p>
   <?php
   print strtolower("ILIAN")
   
  $family = array();
array_push($family, "ILIAN");
array_push($family, "DESISLAVA");
array_push($family, "YOANA");
array_push($family, "DANIEL");
count($family);
// Sort the list
sort($family);

// Randomly select a winner!
$winner = $family[rand(0,count($family)- 1)];
// Print the winner's name in ALL CAPS
echo strtoupper($winner);
    ?>
  </p>
</html>