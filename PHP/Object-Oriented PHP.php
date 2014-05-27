<!DOCTYPE html>
 <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
        public static function say() {
          echo "Here are my thoughts!";
       }
      }
      class Blogger extends Person {
          const cats = 50;
      }
      Blogger::say(); 
      echo Blogger::cats;
	  
	  
	  class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        class Bicycle extends Vehicle{
            public function honk(){
            return "Beep beep!";
                }
            }
            $bicycle= new Bicycle();
           echo $bicycle->honk();
		   
		   
	  
	   class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }

         
      ?>
    </p>
  </body>
</html>