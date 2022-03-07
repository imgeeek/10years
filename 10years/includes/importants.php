<?php

function get_safe_input($conn,$str){
    return mysqli_real_escape_string($conn,$str);
  
}
?>