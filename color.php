<?php
function get_color_char($no){
  $mod_no = $no%22;
  $str = '';
  if($mod_no<10)
    $str = (string) $mod_no;
  else if($mod_no==10||$mod_no==21)
    $str = 'A';
  else if($mod_no==11||$mod_no==20)
    $str = 'B';
  else if($mod_no==12||$mod_no==19)
    $str = 'C';
  else if($mod_no==13||$mod_no==18)
    $str = 'D';
  else if($mod_no==14||$mod_no==17)
    $str = 'E';
  else if($mod_no==15||$mod_no==16)
    $str = 'F';
  
  $str = strrev($str);
  
  return $str;
}
function get_unique_color($str){
  if($str=='')
    $color = '000000';
  else{
    $len = strlen($str);
    $color = '';
    for($i=1;$i<=6;$i++){
      $char_no = ($i-1)%$len;
      $color = $color.get_color_char(ord($str{$char_no}));
    }
  }
  return $color;
}
?>