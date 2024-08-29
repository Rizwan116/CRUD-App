<?php
  $con=new mysqli('localhost', 'root', '', 'crudoperation');
  
  
  if(!$con) {
    die(mysqli_error($con));
  }
//   if(!$con) {
//     echo "connection done";
// }else {
// die(mysqli_error($con));
// }
?>