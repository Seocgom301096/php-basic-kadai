<?php

// Foodクラス
class Food {

    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}


// Animalクラス
class Animal {

    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}


// ② インスタンス作成
$food = new Food("Lemon", 180);
$animal = new Animal("Cat", 60, 4500);


// print_rでインスタンスを出力
print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";


// ③ メソッドへアクセス
$food->show_price();
$animal->show_height();

?>