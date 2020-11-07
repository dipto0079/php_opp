<?php
require 'product.php';
require 'testing.php';

function wow(){
    echo "Wow from Index File.<br>";
}
use pro\v1\command as cmd;

$obj = new cmd\product();

// pro\wow();