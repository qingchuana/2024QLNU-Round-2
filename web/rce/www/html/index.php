<?php

$code = $_GET['code'];
if (isset($code)) {
    if (!preg_match("/cat|tac|more|less|head|tail|vi|vim|sort|flag|[0-9]|\*|\`|\%|\>|\<|\'|\"/i", $code)) {
        system($code);
    }else {
        echo "hhhhhhacker!!!"."\n";
    }
} else {
    highlight_file(__FILE__);
}
