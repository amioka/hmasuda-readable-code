<?php
include("init.php");

    $fp = fopen (DATAFILE, 'r');

    if ($fp) {
        while (!feof($fp)) {
            $msg = fgets($fp);
            print($msg);
        }
    }
    fclose($fp);


