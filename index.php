<?php

require_once(__DIR__.'/Parser.php');

// tests
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
