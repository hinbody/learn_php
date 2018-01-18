<?php
class SimpleClass {
  public $var1 = "me";
  public $var2 = "also me";
  public $var3 = <<<EOT
This variable has a lot of text
that is
broken up over several
lines
EOT;
}

$stuff = new SimpleClass();
echo $stuff->var1 . PHP_EOL;
echo $stuff->var2 . PHP_EOL;
echo $stuff->var3 . PHP_EOL;
?>
