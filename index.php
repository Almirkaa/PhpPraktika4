<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="cont">
<?php  

// Базовый класс Animal  
class Animal {  
    protected $name;
    protected $weight; // вес  
    protected $age;    // возраст  
    protected $color;  // окрас  

    public function __construct($name,$weight, $age, $color) {  
        $this->name = $name; 
        $this->weight = $weight;  
        $this->age = $age;  
        $this->color = $color;  
    }  

    public function getInfo() {  
        return "Название: $this->name, Вес: $this->weight, Возраст: $this->age, Окрас: $this->color";  
    }  
}  

// Класс Lion, наследуется от Animal  
class Lion extends Animal {  
    private $maneColor; // уникальное свойство  

    public function __construct($name,$weight, $age, $color, $maneColor) {  
        parent::__construct($name, $weight, $age, $color);  
        $this->maneColor = $maneColor;  
    }  

    public function roar() {  
        return "Лев рычит! Масть грива: $this->maneColor.";  
    }  

    public function getInfo() {  
        return parent::getInfo() . ", Цвет гривы: $this->maneColor";  
    }  
}  

// Класс Rabbit, наследуется от Animal  
class Rabbit extends Animal {  
    private $earLength; // уникальное свойство  

    public function __construct($name,$weight, $age, $color, $earLength) {  
        parent::__construct($name, $weight, $age, $color);  
        $this->earLength = $earLength;  
    }  

    public function hop() {  
        return "Кролик прыгает! Длина ушей: $this->earLength см.";  
    }  

    public function getInfo() {  
        return parent::getInfo() . ", Длина ушей: $this->earLength см.";  
    }  
}  

// Класс Wolf, наследуется от Animal  
class Wolf extends Animal {  
    private $packSize; // уникальное свойство  

    public function __construct($name,$weight, $age, $color, $packSize) {  
        parent::__construct($name,$weight, $age, $color);  
        $this->packSize = $packSize;  
    }  

    public function howl() {  
        return "Волк воет! Размер стаи: $this->packSize.";  
    }  

    public function getInfo() {  
        return parent::getInfo() . ", Размер стаи: $this->packSize";  
    }  
}  

// Создание объектов на основе классов  
$lion = new Lion('Лев', 190, 5, 'жёлтый', 'тёмно-коричневый');  
$rabbit = new Rabbit('Кролик',2, 3, 'белый', 12);  
$wolf = new Wolf('Волк',50, 4, 'серый', 6);  

// Вывод информации о животных  
?>
<div class="block"><?echo$lion->getInfo() . "\n" . $lion->roar() . "\n\n";?></div>
<br>
<div class="block"><?echo $rabbit->getInfo() . "\n" . $rabbit->hop() . "\n\n";?></div>  
<br>
<div class="block"><?echo $wolf->getInfo() . "\n" . $wolf->howl() . "\n"; ?></div> 

</body>
</html>