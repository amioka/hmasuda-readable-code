<?php
include("init.php");

if (!file_exists(DATAFILE))
    die("No such file: " . DATAFILE);

if (!$fp = fopen (DATAFILE, 'r'))
    die("Cannot open " . DATAFILE);

$recipe_id = 0;

// レシピにIDを振りながらデータファイルの中身を表示する
while (!feof($fp))
{
    $msg = fgets($fp);
    if ($msg == '') continue;

    $recipe_id++;
    printf('%2$ 3d:%1$s', $msg, $recipe_id);
}
fclose($fp);

