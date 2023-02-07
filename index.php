<?php
/*
 * Task 1
$a = 3;
echo $a;

Task 2
$a = 10;
$b = 2;
$sum = $a + $b;
$dimm = $a -$b;
$dob = $a * $b;
$ch = $a / $b;
echo "Sum = $sum, Dimm = $dimm, Dobutok = $dob, Chastka = $ch";

Task 3
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;

Task 4

$a=10;
$b=2;
$c=5;

echo $a +$b + $c;
Task 5
$a=17;
$b=10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;

Task 6
$text = 'Привіт,Світ!';
echo $text;

Task 7
$text1='Привіт, ';
$text2='Світ!';

echo $text1 . $text2;

Task 8
$name = 'Андрій';
echo " Привіт,$name!";

Task 9
$age = 24;
echo "Мені $age років";

Task 10
$text = 'abcde';
echo "$text[0],$text[2],$text[4]";

Task 11
$text = 'abcde';
$str = '!';
$str2 = substr_replace($text,$str,0,1);
echo $str2;

Task 12
$num = '12345';
echo array_sum(str_split($num));

Task 13
$minute = 60;
$sec_in_hour = 60 * $minute;
$sec_in_day = 24 * 60 * $minute;
$sec_in_month = $sec_in_day * 30;

Task 14
$hour = date('H') + 2;
$minute = date('i');
$seconds = date('s');
echo $hour . ':'.$minute.':'.$seconds;

Task 15
$num = 2;
echo pow($num,2);

Task 16
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;

Task 17
$text = 'Я';
$text .= ' хочу';
$text .= ' знати';
$text .= ' PHP!';
echo $text;

Task 18
$var = 10;
$var++;
$var++;
$var--;
echo $var;

Task 19
$var = 10;
$var += 7;
$var++;
$var -= 1;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;

Task 20
$arr=['a', 'b', 'c'];
var_dump($arr);

Task 21

$arr=['a', 'b', 'c'];
echo "1: $arr[0], 2: $arr[1], 3: $arr[2]";

Task 22
$arr=['a', 'b', 'c', 'd'];
echo "$arr[0] + $arr[1], $arr[2] + $arr[3]"

Task 23

$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result;

Task 24
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;

Task 25
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
foreach ($arr as $key => $item) {
  if ($key == 'c') {
      echo $item . " ";
  }
}

Task 26
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$sum = 0;
foreach ($arr as $item) {
  $sum += $item;
}
echo "Sum: $sum";

Task 27
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
$result = "";
foreach ($arr as $key => $item) {
  if ($key == 'Коля') $result .= "Зарплата Колі: $item <br>";
  else if ($key == 'Петя') $result .= "Зарплата Петрика: $item <br>";
}
echo $result;

Task 28
$week = ['1' => 'Понеділок', '2' => 'Вівторок', '3' => 'Середа', '4' => 'Четвер', '5' => 'П\'ятниця', '6' => 'Субота', '7' => 'Неділя'];
print_r($week[5]);

Task 29
$week = ['1' => 'Понеділок', '2' => 'Вівторок', '3' => 'Середа', '4' => 'Четвер', '5' => 'П\'ятниця', '6' => 'Субота', '7' => 'Неділя'];
$day = 4;
foreach ($week as $key => $item) {
  if ($key === $dayToday) {
    echo "Сьогодні $item";
    break;
  }
}

Task 30
$arr = ['cms'=>['joomla', 'wordpress', 'drupal'], 'colors'=>['blue'=>'блакитний', 'red'=>'червоний', 'green'=>'зелений']];
$result = "";
foreach ($arr['cms'] as $item) {
  if ($item == 'joomla') {
    $result .= "joomla,";
  }
  else if ($item == 'drupal') {
    $result .= "drupal,";
  }
}
foreach ($arr['colors'] as $item) {
  if ($item == 'зелений') {
    $result .= "зелений,";
  }
  else if ($item == 'червоний') {
    $result .= "червоний,";
  }
}
if ($result{strlen($result)-1} == ',') {
  $str = substr($result,0,-1);
}
echo $result;

Task 31
$arr = [
  'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя'],
  'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
$result = "";
foreach ($arr['ua'] as $item) {
    if ($item == 'Понеділок') {
        $result .= "$item ";
    }
}
foreach ($arr['en'] as $item) {
  if ($item == 'Wednesday') {
    $result .= "$item ";
  }
}
echo  $result;

Task 32
$arr = [
  'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П\'ятниця', 'Субота', 'Неділя'],
  'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
$lang = 'ua';
$day = 3;
$result = "";
if ($lang == 'en') {
    $day--;
    foreach ($arr['en'] as $key => $item) {
      if ($key == $day) {
          $result .= $item;
      }
    }
} else if($lang == 'ua') {
  $day--;
  foreach ($arr['ua'] as $key => $item) {
    if ($key == $day) {
      $result .= $item;
    }
  }
}
echo $result;
*/







