#「オムライス」を表示する

## 課題

https://github.com/clear-code/sezemi-2014-readable-code/blob/master/0706/task.md


## 実行方法

使い方

```
php ./recipe.php <recipe_data_filename> [<select_recipe_data_id>]
```

例)

```
php ./recipe.php recipe_data.txt
```

### select_recipe_data_id
表示するレシピID。指定しない場合はすべてのレシピを表示する

## レシピ情報

* ファイル名は任意（コマンドラインの第一引数でファイルパスを指定）
* 中身はCSVで、1行目にはヘッダ、2行目以降はレシピ情報を記述する
* ヘッsダの第1カラムはユーザ名
* レシピ情報の第1カラムはレシピ名、第2カラムはレシピのURL

```
amioka
オムライス,http://cookpad.com/recipe/2653946
親子丼,http://cookpad.com/recipe/2657882
杏仁豆腐,http://cookpad.com/recipe/2654398
```

