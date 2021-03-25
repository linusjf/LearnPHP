<?php
if (isset($_REQUEST['tag'])) {
  switch ($_REQUEST['tag']) {   
  default:    $string=FALSE;                     break;
  case 1:     $string='first choice';            break;
  case 2:     $string='another possible choice'; break;
  case 3:     $string='maybe something else';    break;
  case 4:     $string='yet another idea';        break;
  }
  echo $string;
}
?>
