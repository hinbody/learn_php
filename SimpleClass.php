<?php
class SimpleClass {
  #class properties are defined using keywords: public, protected, or private
  public $var1 = "me";
  public $var2 = "also me";
  #properites can be initialized with a heredoc or a nowdoc
  public $var3 = <<<EOT
This variable has a lot of text
that is
broken up over several
lines
EOT;
}

$stuff = new SimpleClass();
#accessing the class properites to print them to the screen
echo $stuff->var1 . PHP_EOL;
echo $stuff->var2 . PHP_EOL;
echo $stuff->var3 . PHP_EOL;
?>
