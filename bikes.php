<?php

class Bike
{
  public $wheel_size;
  public $frame_color;

  const VEHICLE = TRUE;

  public function paint_frame($new_color) {
    $this->frame_color = $new_color;
  }
}

class Bmx extends Bike
{
  public $pegs = 0;

  public function add_pegs($pegs){
    $this->pegs = $pegs;
  }

}

$s125r = new Bmx();
$s125r->frame_color = "trans red";
echo "Original frame color of 125r is " . $s125r->frame_color . PHP_EOL;
$s125r->paint_frame("black");
echo "New frame color of 125r is " . $s125r->frame_color . PHP_EOL;

$intrikat = new Bmx();
echo "Originally the intrikat had " . $intrikat->pegs . " pegs" . PHP_EOL;
$intrikat->add_pegs(4);
echo "The intrikat now has " . $intrikat->pegs . " pegs" . PHP_EOL;

if ($intrikat::VEHICLE):
  echo "The intrikat is a vehicle" . PHP_EOL;
endif
?>
