<?php
echo "<h3>string length</h3>";

$x="String";
echo "The string length of word string is ";
echo strlen($x);

echo "<br>";
echo "<br>";

echo "<h3>String length using class and object</h3>";

class Sl {
     

   
   public function __construct($wd) {

       $this->wd = $wd;
       $this->word = strlen($wd);
       $this->wordcount = str_word_count($wd);

   }
   public function message() {
       return "The length of the sentence <b> $this->wd </b> is $this->word , word count is $this->wordcount";

   }
}



$mySl =  new Sl("Word");
echo $mySl->message();
echo "<br>";
echo "<br>";

$mySl =  new Sl("String Features");
echo $mySl->message();
echo "<br>";
echo "<br>";

$mySl =  new Sl("Thalasophobia is a phobia");
echo $mySl->message();
echo "<br>";
echo "<br>";

$mySl =  new Sl("my name is prabakaran");
echo $mySl->message();
echo "<br>";
echo "<br>";

$mySl =  new Sl("PHP is a Language");
echo $mySl->message();
echo "<br>";
echo "<br>";

?>




