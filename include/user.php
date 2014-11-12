<?php
error_reporting(E_ALL);
var_dump(include_once APP_ROOT."/libs/Parser.class.php");

try {
    $parser = new Parser("http://thepiratebay.se/search/frozen/0/7/200");
    $res = $parser->run(2);
    var_dump($res);
}
catch (Exception $e) {
    echo 'Exception : ', $e->getMessage(), "\n";
    var_dump(debug_backtrace());
}

?>