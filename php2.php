<?php

//c1 Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkNumber($number){
    if ( $number % 2 === 0) {
        echo "The number is even.";
    } else {
        echo "The number is odd.";
    }
}
checkNumber(8);
echo "<br>";

//c2 tính tổng của các số từ 1 đến n.
function sum($n){
    $i=0;
    $sum=0;
    while ($i<=$n) {
        $sum=$sum+$i;
        $i++;
    }
    echo $sum;
}
sum(5);
echo "<br>";

//c3 in ra bảng cửu chương từ 1 đến 10.
function multiTable(){
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i:\n";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result\n";
        }
        echo "\n";
    }
}
multiTable();
echo "<br>";

//c4 kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function containsSubstring($string, $substring) {
    $position = strpos($string, $substring);

    if ($position !== false) {
        echo "The string contains the substring.";
    } else {
        echo "The string does not contain the substring.";
    }
}
containsSubstring("hom nay troi dep","dep");

//c5 tìm giá trị lớn nhất và nhỏ nhất trong một mảng.


function minMax($array){

for ($i = 1; $i < count($array); $i++) {
    $minimum = $array[0];
    $maximum = $array[0];
    if ($array[$i] < $minimum) {
        $minimum = $array[$i];
    }
    if ($array[$i] > $maximum) {
        $maximum = $array[$i];
    }
}

echo "Giá trị nhỏ nhất trong mảng: " . $minimum . "<br>";
echo "Giá trị lớn nhất trong mảng: " . $maximum . "<br>";
}
minMax([5, 10, 3, 8, 2, 7]);

//c6 sắp xếp một mảng theo thứ tự tăng dần.
function arrange($array){
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Hoán đổi hai phần tử
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: ";
    print_r($array);
}
arrange([5, 10, 3, 8, 2, 7]);
//c7 Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorialCal($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$number=5;
$result = factorialCal($number);
 echo "Giai thừa của $number là: $result";

 //c8  tìm số nguyên tố trong một khoảng cho trước.
 function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function findPrimesInRange($start, $end) {
    $primes = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

$start = 1;
$end = 100;

$primeNumbers = findPrimesInRange($start, $end);

echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}

//c9 tính tổng của các số trong một mảng.
$array = [1, 2, 3, 4, 5];
$sum = 0;

foreach ($array as $number) {
    $sum += $number;
}

echo "Tổng của các số trong mảng là: " . $sum;

//c10 in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci($n) {
    $fibonacci = [0, 1]; // Khởi tạo mảng Fibonacci với 2 số đầu tiên

    // Tính toán và thêm các số Fibonacci vào mảng cho đến khi đạt đến $n
    while ($fibonacci[count($fibonacci) - 1] < $n) {
        $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    }

    // In ra các số Fibonacci trong mảng
    foreach ($fibonacci as $number) {
        echo $number . " ";
    }
}

$limit = 100;

echo "Các số Fibonacci trong khoảng cho trước là: ";
printFibonacci($limit);

//c11 kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen((string)$number);

    while ($temp > 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = (int)($temp / 10);
    }

    return $sum === $number;
}

$number = 153;

if (isArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không phải là số Armstrong.";
}

//c12 chèn một phần tử vào một mảng ở vị trí bất kỳ.

function insertElement($array,$insertElement,$insertIndex){
if ($insertIndex >= 0 && $insertIndex <= count($array)) {
    $tempArray = array_slice($array, $insertIndex);
    $array[$insertIndex] = $insertElement;
    $array = array_merge(array_slice($array, 0, $insertIndex + 1), $tempArray);
} else {
    echo "Vị trí chèn không hợp lệ.";
}

print_r($array);
}
insertElement([1, 2, 4, 5],2,3);


//c13 loại bỏ một phần tử trong mảng
function removeDuplicates($array) {
    $uniqueArray = array(); // Mảng mới để lưu các phần tử duy nhất

    foreach ($array as $element) {
        if (!in_array($element, $uniqueArray)) {
            // Nếu phần tử chưa tồn tại trong mảng mới, thêm vào
            $uniqueArray[] = $element;
        }
    }

    return $uniqueArray;
}

$array = array(1, 2, 3, 4, 2, 3, 5);
$uniqueArray = removeDuplicates($array);

echo "Mảng ban đầu: ";
print_r($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp: ";
print_r($uniqueArray);

//c14 tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $position = -1; // Giả sử phần tử không tồn tại trong mảng

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $element) {
            $position = $i;
            break;
        }
    }

    return $position;
}

$array = [1, 2, 3, 4, 5];
$element = 3;
$position = findElementPosition($array, $element);

if ($position !== -1) {
    echo "Vị trí của phần tử $element trong mảng là $position.";
} else {
    echo "Phần tử $element không tồn tại trong mảng.";
}

//15 đảo ngược chuỗi
function reverseString($string) {
    $reversedString = ''; // Biến lưu chuỗi đảo ngược

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    echo "Chuỗi đảo ngược: " . $reversedString;
}

// Ví dụ sử dụng:
$string = "Hello, World!";
echo "Chuỗi ban đầu: " . $string . "   ";
reverseString($string);

//16 tính số lượng phần tử trong một mảng.
function calElement($array){
    $count = 0; 
    foreach ($array as $element) {
        $count++;
    }

    echo "số phần tử trong mảng là:$count";
}

calElement([1,2,3,5,6]);

//17 kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    // Xóa các ký tự không cần thiết và chuyển đổi chuỗi thành chữ thường
    $string = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
    
    $length = strlen($string);
    
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            echo "Chuỗi 1 không phải là chuỗi Palindrome";
        }
    }
    
    echo "Chuỗi 1 là chuỗi Palindrome";
}

// Ví dụ sử dụng:
$string1 = "radar";
$string2 = "Hello World";

isPalindrome($string1);

//18 đếm số lần xuất hiện của một phần tử trong một mảng.
function countAppearance($array, $element) {
    $count = 0;
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $element) {
            $count++;
        }
    }

    echo "Số lần xuất hiện của phần tử $element trong mảng là: $count";
}

$array = [1, 2, 3, 2, 4, 2, 5];
$element = 2;
countAppearance($array,$element);

//19 để sắp xếp một mảng theo thứ tự giảm dần.
$array = [6, 10, 3, 8, 2, 7];

function descArrange($array){
    $c = count($array);
    for ($i = 0; $i < $c - 1; $i++) {
      for ($j = 0; $j < $c - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $swap = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $swap;
        }
      }
    }
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
print_r($array);
}

descArrange($array);

//20 thêm một phần tử vào đầu hoặc cuối của một mảng.
$array = [6, 10, 3, 8, 2, 7];
function addElement($array,$newElement,$post){
    switch ($post){

    case 'fisrt':
        // Tạo một mảng tạm để chứa phần tử mới và các phần tử cũ
        $tempArray = [$newElement];

        // Duyệt qua các phần tử trong mảng cũ và thêm chúng vào mảng tạm
       foreach ($array as $element) {
       $tempArray[] = $element;
       }

       // Gán mảng tạm vào mảng gốc
       $array = $tempArray;
       
       // Kết quả
       print_r($array);
    break;
       
    case 'last':
        // tìm vị trí cuối cùng
        $lastIndex = count($array);
        
        // Gán phần tử mới vào vị trí cuối
        $array[$lastIndex] = $newElement;
        
        // Kết quả
        print_r($array);


    break;

    }

}
addElement($array,'1','last');

//21 tìm số lớn thứ hai trong một mảng
$array = [6, 10, 3, 8, 2, 7];
function findTheSencondMax($array){
    $c = count($array);
    $max = $array[0];
    $secondMax = null;
    
    for ($i = 1; $i < $c; $i++) {
        if ($array[$i] > $max) {
            $secondMax = $max;
            $max = $array[$i];
        } elseif ($array[$i] < $max && ($secondMax === null || $array[$i] > $secondMax)) {
            $secondMax = $array[$i];
        }
    }
    if ($secondMax !== null) {
        echo "Số lớn thứ hai trong mảng là: " . $secondMax;
    } else {
        echo "Không có số lớn thứ hai trong mảng.";
    }
}
findTheSencondMax($array);
//22  tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}

$number1 = 24;
$number2 = 36;

$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);

echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd<br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm";

//23 kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}


if (isPerfectNumber(28)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không là số hoàn hảo.";
}

//24 tìm số lẻ lớn nhất trong một mảng.
$array = [6, 10, 3, 8, 2, 7];
function findLargestOdd($array) {
    $largestOdd = null;

    foreach ($array as $number) {
        if ($number % 2 == 1 && $number > $largestOdd) {
            $largestOdd = $number;
        }
    }

    if ($largestOdd !== null) {
        echo "Số lẻ lớn nhất trong mảng là: $largestOdd";
    } else {
        echo "Không có số lẻ trong mảng.";
    }
}

$largestOdd = findLargestOdd($array);

//25 kiểm tra xem một số có phải là số nguyên tố hay không.

function isItPrime ($number) {
    if ($number <= 1) {
        echo "$number không là số nguyên tố.";
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            echo "$number không là số nguyên tố.";
        }
    }

    echo "$number không là số nguyên tố.";
}

$number = 17;

isItPrime($number);

//26 số dương lớn nhất trong một mảng.
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > $largestPositive && $number > 0) {
            $largestPositive = $number;
        }
    }

    if ($largestPositive !== null) {
        echo "Số dương lớn nhất trong mảng là: $largestPositive";
    } else {
        echo "Không có số dương trong mảng.";
    }
}

$array = [6, -5, 8, -3, 10, -7, 4];

findLargestPositive($array);

//27
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0 && ($number > $largestNegative)) {
            $largestNegative = $number;
        }
    }

    if ($largestNegative !== null) {
        echo "Số âm lớn nhất trong mảng là: $largestNegative";
    } else {
        echo "Không có số âm trong mảng.";
    }
}

$array = [6, -5, 8, -3, -10, -7, 4];

findLargestNegative($array);

//28 tính tổng các số lẻ từ 1 đến n.
function sumOdd($n){
    $sum=0;
    for ($i=0;$i<$n;$i++) {
        if ($i%2==1){
            $sum=$sum+$i;
        }
    }
    echo "tong cac so le tu 1 den $n la: $sum";
}
sumOdd(6);


//29  tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
    $perfectSquares = [];

    for ($number = $start; $number <= $end; $number++) {
        if (isPerfectSquare($number)) {
            $perfectSquares[] = $number;
        }
    }

    return $perfectSquares;
}

function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt - floor($sqrt)) === 0;
}

$start = 1;
$end = 20;

$perfectSquareNumbers = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($perfectSquareNumbers as $number) {
    echo $number . " ";
}

//30 kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    // Nếu độ dài chuỗi con lớn hơn chuỗi ban đầu, không thể là chuỗi con
    if ($substringLength > $stringLength) {
        return false;
    }

    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $matched = true;

        // So sánh từng ký tự của chuỗi con với chuỗi ban đầu
        for ($j = 0; $j < $substringLength; $j++) {
            if ($string[$i + $j] !== $substring[$j]) {
                $matched = false;
                break;
            }
        }

        // Nếu tìm thấy chuỗi con trong chuỗi ban đầu, trả về true
        if ($matched) {
            return true;
        }
    }

    // Không tìm thấy chuỗi con trong chuỗi ban đầu
    return false;
}

$string = "hom nay troi dep";
$substring = "dep";

if (isSubstring($string, $substring)) {
    echo "Chuỗi \"$substring\" là chuỗi con của chuỗi \"$string\"";
} else {
    echo "Chuỗi \"$substring\" không là chuỗi con của chuỗi \"$string\"";
}

?>