<?php
class Room
{

  public function say()
  {
    echo "barev";
  }


}
class app extends Room
{
  public function barev()
  {
    parent::say();
    echo "ashxar";
  }
}

$myapp = new app();
$myapp->barev();


?>