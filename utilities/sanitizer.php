<?php

function sanitizer($evil_string){
     $purify=strip_tags($evil_string);
    $purify=htmlspecialchars($purify);
    $purify=ucfirst($purify);
    // $purify=ucwords($purify);
    $purify=trim($purify);
    // $purify=str_ireplace("idiot","***",$purify);
   return$purify;
  

}



?>