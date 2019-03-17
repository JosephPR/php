<h3>I ended at the using class inheritance part </h3>

<p>object oriented php</p>
   <?php

   class MyClass
   {
     // Class properties and methods go here
     public $prop1 = "I'm a class property!";
     public $joey = 'Im using oop and testing out this variable to see if i know anything';
     public function __construct()
     {
         echo 'The class "', __CLASS__, '" was initiated!<br />';
     }
     public function __destruct()
     {
         echo 'The class "', __CLASS__, '" was destroyed.<br />';
     }
     public function __toString()
{
    echo "Using the toString method: ";
    return $this->getProperty();
}

     public function setProperty($newval)
 {
     $this->prop1 = $newval;
 }

 public function getProperty()
 {
     return $this->joey . "<br />";

     }

   }

   class MyOtherClass extends MyClass
{
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
}

// Create a new object
$newobj = new MyOtherClass;

// Output the object as a string
echo $newobj->newMethod();

// Use a method from the parent class
echo $newobj->getProperty();




//    //create a new object
//    $obj = new MyClass;
//
//    // Output the object as a string
// echo $obj;

   // // Get the value of $prop1
   // echo $obj->getProperty();

//    // Destroy the object
// unset($obj);
//
//    // Output a message at the end of the file
//    echo "End of file.<br />";






   // $obj2 = new MyClass;
   //
   // // Get the value of $prop1 from both objects
   // echo $obj->getProperty();
   // echo $obj2->getProperty();
   //
   // // Set new values for both objects
   // $obj->setProperty("I'm a new property value!");
   // $obj2->setProperty("I belong to the second instance!");
   //
   // // Output both objects' $prop1 value
   // echo $obj->getProperty();
   // echo $obj2->getProperty();
   ?>
