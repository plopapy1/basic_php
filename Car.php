<?php


class Car{

public $name;
public $color;


function __construct($name, $color)
{
$this -> name = $name;
$this -> color = $color;

}

public function get_name()
{
    return $this ->name;
}
 private function get_color()
{
    return $this ->color;
}
public function show_color()
{
    return $this ->get_color ();
}

}

class Benz extends Car{

    public $model;

    function __construct($name, $color, $model)
{
        $this -> name = $name;
        $this -> color = $color;
        $this -> model = $model;

}

    public function print_color()
    {
        return $this -> show_color();
    }

    public function get_model()
    {
        return $this -> model;
    }
}

$benz =  new Benz('mercedes', 'red', '2020');

echo $benz -> print_color();
$benz -> model = '1999';
echo $benz -> get_model();


// $volvo = new Car ('volvo', 'red');

// echo $volvo->get_name();
// echo '<br>';
// echo $volvo-> get_color();
// echo '<br>';


// $footballer = new Car ('cloth', 'blue');

// echo $footballer ->get_name();
// echo '<br>';
// echo $footballer -> get_color();
// echo '<br>';

// $benz = new Car ('Mercedes Benz', 'cream');

// echo 'the name of my favorite car is : ' . $benz -> get_name() . 'and i love it to bee in ' . $benz ->show_color() . 'color';


?>