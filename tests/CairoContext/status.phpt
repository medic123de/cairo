--TEST--
CairoContext->status() method
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

$status = $context->status();
var_dump($status);

var_dump($status == CairoStatus::SUCCESS);

/* Wrong number args */
try {
    $context->status('foo');
    trigger_error('status requires only one arg');
} catch (CairoException $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
--EXPECTF--
object(CairoImageSurface)#%d (0) {
}
object(CairoContext)#%d (0) {
}
int(0)
bool(true)
CairoContext::status() expects exactly 0 parameters, 1 given