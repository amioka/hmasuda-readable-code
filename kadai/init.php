<?php
if ($argc < 2)
{
    print "Usage: $argv[0] <recipe_data_filepath>\n";
    exit(1);
}

// データファイル名
define("DATAFILE", $argv[1]);

