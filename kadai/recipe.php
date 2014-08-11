<?php
include("init.php");

if (!file_exists(DATAFILE))
    die("No such file: " . DATAFILE);

if (!$fp = fopen (DATAFILE, 'r'))
    die("Cannot open " . DATAFILE);

// データファイルの中身を表示する
while (!feof($fp))
{
    $msg = fgets($fp);
    print($msg);
}
fclose($fp);

