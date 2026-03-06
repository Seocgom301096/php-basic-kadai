<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php 
function sort_2way($array, $order)
{
    // 条件分岐if文
    if ($order === "asc") {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順
    } elseif ($order === "desc") {
        echo "降順にソートします。<br>";
        rsort($array); // 降順
    } else {
        echo "ソート方向は asc または desc を指定してください。<br>";
        return;
    }

    // foreach文を使い縦に出力
    foreach ($array as $value) {
        echo $value . "<br>";
    }

    
}

// 関数を呼び出す
$nums = [15, 4, 18, 23, 10];

sort_2way($nums, "asc");
sort_2way($nums, "desc");

?>
    </p>
</body>

</html>