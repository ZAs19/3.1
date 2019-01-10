<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>Инкапсуляция</title>
</head>
<body>

<p><strong>Инкапсуляция</strong> - объединение кода и данных, взаимодействие и их вывод. Класс хранит в себе свойства(цвет, длина, размер и т.д.) и методы объекта</p>
<p>Инкапсуляция позволяет выводить данные систематически, а также защищает от внешнего влияния вмешательства или несанкционированного использования.</p>
<p>Плюсы:</p>
<ul>
    <li>быстрое изменение свойств и методов</li>
    <li>фиксация значений, запрещенных к изменению</li>
    <li>возможность переиспользования объекта в другом объекте</li>
</ul>
<p>Минусы:</p>
<ul>
    <li>ограничения области видимости</li>
    <li>не работают без параметров</li>
</ul>

<?php
class Car
{
    public $name;
    public $model;
    public $color;
    public $transmission;
    public $countryIssue;
    public function __construct ($name, $model, $countryIssue)
    {
        $this->name = $name;
        $this->model = $model;
        $this->countryIssue = $countryIssue;
    }
    public function character($countryIssue, $color, $transmission)
    {
        $this->countryIssue = $countryIssue;
        $this->color = $color;
        $this->transmission = $transmission;
        if ($this->countryIssue == "Россия"){
            echo "Выбор ограничен!" . "Доступна комплектация в цвете: " . $this->color . " с коробкой передач: " . $this->transmission . ".";
        }  else {
            echo "Широкий выбор автомобилей данной марки! Популярная модель в цвете: " . $this->color . " с коробкой передач: " . $this->transmission . ".";
        }
    }
}
$car1 = new Car("Волга", "ГАЗ-3110", "Россия");
$car2 = new Car("Audi", "Q7", "Германия");
?>

<h2>Машины</h2>

<ul>
    <li><?php print_r("Название автомобиля: " . $car1->name); ?></li>
    <li><?php print_r("Название модели: " . $car1->model); ?></li>
    <li><?php print_r("Страна изготовитель: " . $car1->countryIssue); ?></li>
    <li><?php print_r($car1->character("Россия","серый", "механика")); ?></li>
</ul>

<ul>
    <li><?php print_r("Название автомобиля: " . $car2->name); ?></li>
    <li><?php print_r("Название модели: " . $car2->model); ?></li>
    <li><?php print_r("Страна изготовитель: " . $car2->countryIssue); ?></li>
    <li><?php print_r($car2->character("Германия","белый", "автомат")); ?></li>
</ul>

<h2>Телевизоры</h2>
<?php
class TV
{
    public $modelTV;
    public $screenSize;
    public $color;
    public $tecnology;
    public function __construct ($modelTV, $screenSize, $tecnology) {
        $this->modelTV = $modelTV;
        $this->screenSize = $screenSize;
        $this->tecnology = $tecnology;
        echo "<pre>";
        echo "В наличии модели телевизоров " . $this->modelTV . " диагональю " . $this->screenSize . "'' с технологией: " . $this->tecnology;
        echo "</pre>";
    }
    public function color($color)
    {
        $this->color = $color;
        if ($this->color == "черный")
        {
            echo "Выбор ограничен!" . "Доступна комплектация в цвете: " . $this->color . ".";
        }
        else {
            echo "Скидка на все телевизоры марки LG в цвете: " . $this->color . ".";
        }
    }
}
$tv1 = new TV("Samsung", "55", "4K");
echo "<pre>";
print_r($tv1->color("черный"));
echo "</pre>";
$tv2 = new TV("LG", "43", "HD");
echo "<pre>";
print_r($tv2->color("белый"));
echo "</pre>";
?>

<h2>Ручки</h2>

<?php
class Pen
{
    public $brand;
    public $color;
    public $packAmount;
    public $price;
    public $discount;
    public function __construct ($brand, $color, $price)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }
    public function sale ($packAmount, $discount)
    {
        $this->packAmount = $packAmount;
        $this->discount = $discount;
        if ($this->packAmount >= 10 ){
            echo "При покупке этой модели от 5 ручек предоставляется скидка " . $this->discount . "%" . ".";
        }  else {
            echo "Скидки на данный товар не предусмотрены!";
        }
    }
}
$pen1 = new Pen("Parker", "синий", 120 );
$pen2 = new Pen("Quality", "черный", 80);
?>

<ul>
    <li><?php print_r("Бренд ручки: " . $pen1->brand); ?></li>
    <li><?php print_r("Цвет чернил: " . $pen1->color); ?></li>
    <li><?php print_r("Цена: " . $pen1->price . " руб."); ?></li>
    <li><?php print_r("Количество в пачке: " . $pen1->packAmount); ?></li>
    <li><?php print_r($pen1->sale(8,0)); ?></li>
</ul>

<ul>
    <li><?php print_r("Бренд ручки: " . $pen2->brand); ?></li>
    <li><?php print_r("Цвет чернил: " . $pen2->color); ?></li>
    <li><?php print_r("Цена: " . $pen2->price . " руб."); ?></li>
    <li><?php print_r("Количество в пачке: " . $pen2->packAmount); ?></li>
    <li><?php print_r($pen2->sale(12, 7)); ?></li>
</ul>


<h2>Утки</h2>

<?php
class Duck
{
    public $nameType;
    public $age;
    public $habitat;
    public $wintering;
    public function __construct ($nameType, $age)
    {
        $this->nameType = $nameType;
        $this->age = $age;
    }
    public function migration ($habitat, $wintering)
    {
        $this->habitat = $habitat;
        $this->wintering = $wintering;
        if ($this->wintering == false){
            echo "Данный вид уток живет " . $this->habitat . " и им нет необходимости улетать на зимовку.";
        }  else {
            echo "Данный вид уток живет " . $this->habitat . " и во время холодов они мигрируют на юг";
        }
    }
}
$duck1 = new Duck("Кряква", 9);
$duck2 = new Duck("Серая утка", 6);
?>


<ul>
    <li><?php print_r("Наименование вида: " . $duck1->nameType); ?></li>
    <li><?php print_r("Продолжительность жизни: " . $duck1->age . " лет"); ?></li>
</ul>
<?php print_r($duck1->migration("на юге", false)); ?>

<ul>
    <li><?php print_r("Наименование вида: " . $duck2->nameType); ?></li>
    <li><?php print_r("Продолжительность жизни: " . $duck2->age . " лет"); ?></li>
</ul><?php print_r($duck2->migration("на севере", true)); ?>



<h2>Товар</h2>
<?php
class goods
{
    public $name;
    public $wasMade;
    public $quality;
    public $tecnology;
    public function __construct ($name, $wasMade, $quality)
    {
        $this->name = $name;
        $this->wasMade = $wasMade;
        $this->quality = $quality;
        echo "<pre>";
        echo $this->name . " имеет " . $this->quality . " качество. Сделано в " . $this->wasMade;
        echo "</pre>";
    }
    public function region($region)
    {
        $this->region = $region;

        if ($this->region == 1 )
        {
            return "требуется заплатить 10% от стоимости за доставку товара";
        }
        else {
            return "бесплатно";
        }
    }
}
$good1 = new goods("Samsung S9 plus", "Китае", "хорошее", 2);
echo "<pre>";
print_r("Доставка: " . $good1->region(2));
echo "</pre>";
$good2 = new goods("Aplle Iphone XS", "Америке", "выше среднего", 1);
echo "<pre>";
print_r("Доставка: " . $good2->region(1));
echo "</pre>";
?>