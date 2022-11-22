<?php


class Fruit
{

public $name;
public $color;


function set_name($name)
{
       $this->name = $name;
}

function get_name()
{
    return $this->name;
}

function set_color($color)
{
       $this->color = $color;
}

function get_color()
{
    return $this->color;
}



}


$apple = new Fruit();

$apple -> set_name('Apple');
$apple -> set_color ('green');
echo 'the name is :'. $apple -> get_name();
echo "<br>";
echo 'the color is :'. $apple -> get_color();
echo "<br>";
echo "<br>";

$orange= new Fruit();
$orange -> set_name('Orange');
$orange -> set_color ('yellow');
echo 'the name is :'. $orange -> get_name();
echo "<br>";
echo 'the color is :'. $orange-> get_color();
echo "<br>";
echo "<br>";


$mango= new Fruit();
$mango -> set_name('Mango');
$mango -> set_color ('blue');
echo 'the name is :'. $mango -> get_name();
echo "<br>";
echo 'the color is :'. $mango -> get_color();
echo "<br>";
echo "<br>";






?>