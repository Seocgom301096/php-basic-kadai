<?php
//値と変数を代入
$veggie_details = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

//値と変数を出力
foreach ($veggie_details as $key => $value) {
    echo "{$key} : {$value}" . '<br>';
}
?>