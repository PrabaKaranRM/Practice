<?php
echo "<h3>Class and Object</h3>";
  class Department {
      
      public $dep;  //global
      public function __construct($dep) {   //function with argument -->$dep
          $this->dep = $dep;
      }
      public function message() {
          return "My Department is  ".$this->dep;
      }
  }
  
  
 

  $myDepartment =  new Department("UID");
  echo $myDepartment->message();
  echo "<br>";
  echo "<br>";

  $myDepartment =  new Department("GAD");
  echo $myDepartment->message();
  echo "<br>";
  echo "<br>";

  $myDepartment =  new Department("ANIM");
  echo $myDepartment->message();
  echo "<br>";
  echo "<br>";

  $myDepartment =  new Department("VM");
  echo $myDepartment->message();
  echo "<br>";

 echo "<br>";
 echo "<br>";
 echo "<br>";

 ?>