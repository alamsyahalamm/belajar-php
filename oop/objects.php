<?php

class deaLarCar
{
    public $nameCar;
    public $capacity;

    function buyCar()
    {
        echo "Mobil tersedia, silahkan beli.";
    }

    function typeCar()
    {
        echo "Tersedia pilhan tipe kapasitas mobil.";
    }
}
$buy= new deaLarCar();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "honda civic 2023";
echo "berhasil membeli" . $buy ->nameCar . 'dengan kapasity '. $buy ->capacity;
echo "<br>";
$buy->capacity = 2;
//cara 2
