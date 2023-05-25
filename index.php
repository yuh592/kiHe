<?php
/*
echo "xin chao";
//
$age = 20;
echo $age;
const STATUS=1;
echo STATUS;
$carBrand;// đặt tên biến như vầy
$car_brand;// or như vầy
var_dump($age);

function renderColors()
{
    global $color;
    echo $color;
    // hoặc dùng $globals['color']
}
renderColors();
$names=['nam','Mai'];//mảng

function incre()
{
    static $counRun=1;
    echo $counRun;
    $counRun ++;
//dùng static để không xóa giá trị cũ
}
incre();
incre();
strrev($color);//đảo ngược chuỗi
$carColor = "red and pink";
var_dump(strpos($carColor, $color));

function getPow($number1,$number2){
    echo pow($number1,$number2);
}//tinh so mu
*/

//b6
$chuoi1 = "hôm nay nóng";
$chuoi2 = "hôm nay";
function kiemTra($chuoi1, $chuoi2){
    $result = strncmp ($chuoi1, $chuoi2, 100);
    if($result != 0)
    {echo "có";}
    else {echo "không";}
}
kiemTra($chuoi1, $chuoi2);
echo "<br>";
//c7
$strg = "HEllo WoRld";
function Uppercase($strg){
echo strtoupper($strg);
}
Uppercase($strg);
echo "<br>";

//c8
$strg = "HEllo WoRld";
function lowerCase($strg){
echo strtolower($strg);
}
lowerCase($strg);
echo "<br>";

//c9 xoa khoang trong o dau va cuoi chuoi ki tu
$strg = "HEllo WoRld";
function clearSpace($strg){
    echo ucwords($strg);
}
clearSpace($strg);
echo "<br>";
/*
echo strtolower($strg);

echo ucwords($strg);

echo trim($strg);

ltrim($strg);

rtrim($strg);

explode ($strg);
*/
