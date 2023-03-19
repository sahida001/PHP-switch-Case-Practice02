<?php

 $marks = 36;

 switch($marks){
    case $marks >= 0 && $marks < 33:
      $result = 'F';
      break;

    case $marks >= 33 && $marks < 40:
      $result = 'D';
      break;
    
    case $marks >= 40 && $marks < 50:
      $result = 'C';
      break;  
      
    case $marks >= 50 && $marks < 60:
      $result = 'B';
      break;  
      
    case $marks >= 60 && $marks < 70:
      $result = 'A-';
      break;
      
    case $marks >= 70 && $marks < 80:
      $result = 'A';
      break;  
      
    case $marks >= 80 && $marks <= 100:
      $result = 'A+';
      break;  

 }

 echo $result;

?>