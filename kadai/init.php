<?php
if ($argc < 2)
{
    print "Usage: $argv[0] <recipe_data_filepath> [<limited_recipe_data_id>]\n";
    exit(1);
}

// データファイル名
define("DATAFILE", $argv[1]);

// 表示するレシピID。nullの場合すべて
if ($argc < 3) $argv[2] = null;
define("LIMITED_RECIPE_ID", $argv[2]);
