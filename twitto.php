<?php

require __DIR__.'/c.php';
if (!is_callable($c = @$_GET['c'] ?: function() { echo 'Woah!'; }))
  throw new Exception('Error');
$c();

?>