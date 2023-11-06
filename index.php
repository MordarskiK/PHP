<?php
   // echo "Hello world"
   // var_dump("Hello world")
   // print "Hello World"
   // var_dump(strtok("Hello World","HW"));


   // echo str_word_count("Hello world!");
   // echo strrev("Hello World!");
   // var_dump(strpos("Hello World!","o W"));
   // echo str_replace("world", "Dolly", "Hello world!");
   // var_dump(is_string(1));
   // echo str_repeat("Hello ",5);
   // echo str_shuffle("Hello World!");


   // konieczny.testportal.pl
   // hasło: szepty



   function is_palindrom($string){
      $string = strtolower(str_replace(" ","",$string));
      if($string==strrev($string)){
         echo "palindrom";
      }
      else{
         echo "nie palindrom";
      };
   }

   // is_palindrom("Do gees see God");
   // echo "<br>";
   // is_palindrom("okok");


   function is_isogram($string){
      $str = str_split(strtolower(str_replace(" ","",$string)));
      sort($str);

      for($i = 0; $i<strlen($string)-1;$i++){
         if ($str[$i]==$str[$i+1]){
            return "False";
         }
      }
      return "True";
   }

   // echo is_isogram("abcd");
   // echo is_isogram("abcda");




   function is_pangram($string){
      $str = str_split(strtolower(str_replace(",","",str_replace(" ","",$string))));
      sort($str);
      $alphabet = range("a","z");

      for($i = 0; $i<strlen($string)-1;$i++){
         while($str[$i]==$str[$i+1]){
            $str = array_pop($str[$i]);
         }
         if ($str[$i]==$alphabet[$i]){ 
            continue;
         }
         else{
            return "False";
         }
      }
      return "True";
      
   };
   echo is_pangram("aabcdefghijklmnopqrstuvwxyz")
   // echo is_pangram("Waltz, bad nymph, for quick jigs vex")
   // echo is_pangram("The job requires extra pluck and zeal from every young wage earner")

   
?>