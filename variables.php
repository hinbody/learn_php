<?php
#variables are represented with a dollar sign, 
#and must start with a letter or underscore
#
#static variables are local to a function, but retain their value when the
#function is exited rather than being reset
 
$my_name = "Bob";
$_her_name = "Sandy";

echo $my_name . PHP_EOL;
echo $_her_name . PHP_EOL;

$my_show = "Shameless";
$her_show = &$my_show;

function print_shows($my_show, $her_show){
  echo $my_show . PHP_EOL;
  echo $her_show . PHP_EOL;
}

print_shows($my_show, $her_show);

#only $my_show changes, but both variables change because it was assigned by
#reference
$my_show = "This Is Us";

print_shows($my_show, $her_show);
?>
