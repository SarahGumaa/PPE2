<?php
function foo(&$bar) 
{
    unset($bar);
    $bar = "blah";
    echo "ok";
}

$bar = 'truc';
echo "$bar\n";

foo($bar);
echo "$bar\n";

?>