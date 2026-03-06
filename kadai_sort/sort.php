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
    // 条件分岐if文(TRUEなら昇順、FALSEなら降順)
    if ($order === TRUE) {
        echo "昇順にソートします。<br>";
        sort($array);
    } else {
        echo "降順にソートします。<br>";
        rsort($array);
    }

    // foreach文を使用し縦に配列
    foreach ($array as $value) {
        echo $value . "<br>";
    }

    echo "<br>";
}

// 呼び出して出力する
$nums = [15, 4, 18, 23, 10];

sort_2way($nums, TRUE);   // 昇順
sort_2way($nums, FALSE);  // 降順

?>
    </p>
</body>

</html>