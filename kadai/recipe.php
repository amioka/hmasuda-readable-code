<?php
include("init.php");

if (!file_exists(DATAFILE))
    die("No such file: " . DATAFILE);

if (!$fp = fopen (DATAFILE, 'r'))
    die("Cannot open " . DATAFILE);

$recipe_id = 0;

// レシピデータ一行目のヘッダを読み込む
if (feof($fp)) {
	fclose($fp);
	die("No recipe file: " . DATAFILE);
}
list($user_name) = fgetcsv($fp);

printf('ユーザ名：%s', $user_name);
print("\n");

// レシピにIDを振りながらデータファイルの中身を表示する
while (!feof($fp))
{
    $msg = fgetcsv($fp);
    if (empty($msg)) continue;

    list($recipe_name, $recipe_url) = $msg;

    $recipe_id++;

    // 表示するレシピIDに制限があれば、指定されたID以外は表示しない
    if (SELECT_RECIPE_ID && $recipe_id != SELECT_RECIPE_ID) continue;

    // レシピ情報を表示する
    printf('%2$ 3d:%1$s', $recipe_name, $recipe_id);
    print("\n");
    printf('    => URL:%s', $recipe_url);
    print("\n");
}
fclose($fp);

