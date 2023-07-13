<?php
//traits solve two big problems in Php:
//1. code duplication
//2. single inheritance problem

// in both of classes Plain and Helicopter we have:
//  public function fly()
//      {
//           echo "I am flying".PHP_EOL;
//      }
// we create a trait and replace the content in the classes with "echo "I am flying".PHP_EOL;"

