<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編_kadai_016</title>
</head>
<body>
<p>
    <?php
        // Foodクラスを定義
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
            public function show_price() {
                return $this->price;
            }

            // コントラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
    ?>
</p>

<p>
    <?php
        // Animalクラスを定義
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function show_height() {
                return $this->height;
            }

            // コントラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
    ?>
</p>

<?php
    // FoodクラスのpriceとAnimalクラスのheightを出力する
    echo $food->show_price() . "<br>";
    echo $animal->show_height();
?>
  
</body>
</html>