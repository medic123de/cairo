--TEST--
Cairo->deviceToUser() method
--SKIPIF--
<?php
if(!extension_loaded('cairo')) die('skip - Cairo extension not available');
?>
--FILE--
<?php
$surface = new CairoImageSurface(CairoFormat::ARGB32, 50, 50);
var_dump($surface);

$context = new CairoContext($surface);
var_dump($context);

var_dump($context->deviceToUser(5, 5));
?>
--EXPECTF--
object(CairoImageSurface)#%d (0) {
}
object(CairoContext)#%d (0) {
}
array(2) {
  [0]=>
  float(5)
  [1]=>
  float(5)
}