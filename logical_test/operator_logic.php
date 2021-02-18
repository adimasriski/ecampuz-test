<?php
class Fungsi
{
 public $a;
 public $b;

 public function Bagi($a, $b)
 {
   $this->a = $a;
   $this->b = $b;
   $result = $this->a / $this->b;
   return ($result);
 }
}
$data = new Fungsi();
echo $data->Bagi(8, 4);
?>