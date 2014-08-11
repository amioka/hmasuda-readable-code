#仕様4

* エラー処理を入れた

https://github.com/hmasuda/hmasuda-readable-code/commit/215bd27fd483c5ad5fffa8ff0974b655983cf763#diff-6d61c91c49e8eb747799e168cccab176L4

* 初期化処理を別ファイルにしている
https://github.com/amioka/hmasuda-readable-code/commit/4f737dd73436c18fb4f9b73b4c081af2cb0abd44
include("init.php");

* エラー処理をガード節にしている
https://github.com/amioka/hmasuda-readable-code/commit/215bd27fd483c5ad5fffa8ff0974b655983cf763
if (!file_exists(DATAFILE))
    die("No such file: " . DATAFILE);

if (!$fp = fopen (DATAFILE, 'r'))
    die("Cannot open " . DATAFILE);

