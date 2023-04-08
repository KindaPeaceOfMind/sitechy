<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$n = 0;
while (true) {
    $n++;
    echo "data: Сообщение №".$n."\n\n";

    ob_flush();
    flush();

    sleep(1);
}

?>