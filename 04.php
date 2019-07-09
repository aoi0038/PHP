<?php
function sum(){
  
  $result = 0;
  for($i = 1; $i <= 10; $i++){
    $result += $i;
  }
  return $result;
}
echo sum();
echo "\n";

//課題
//1.引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください

function numbers($number){
  return $number * 2;
}
echo numbers(5);
echo "\n";

//2.$a と $b を仮引数に持ち、　
//$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
  return $a + $b;
}
echo f(2,3);
echo "\n";

//3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。

function seki($arr){
  $result = 1;

  foreach($arr as $a){
    $result = $result * $a;
  }
  return $result;
}
echo seki(array(1, 3, 5 ,7, 9))."\n";


//4【応用】次のプログラムは、配列の中で一番大きい値を返す 
//max_array という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(6, 2, 3, 10, 15));
echo "\n";


//5.次のビルトイン関数の用途、
//使い方を調べて実際に使ってみてください。

//strip_tags　→文字列からHTMLおよびPHPの「タグ」を取り除く

$text = '<p>test.</p><a>PHP</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text,'<p><a>');
echo "\n";

//array_push →一つ以上の要素を配列の最後に追加する
$fruits = array("apple","banana");
array_push($fruits,"orange");
print_r($fruits);


//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("color" => "green", 6, 8);

//最初の配列にある要素は上書きされる
$result = array_merge($array1, $array2);
print_r($result);
//両方の配列に同じキーが存在する場合は最初の配列のものが残り、 二番目の配列の内容は無視される
$result = $array1 + $array2;
var_dump($result);

//time, mktime
$nextWeek = time() + (8 * 24 *60 * 60);
echo date('Y-m-d')."\n";
echo date('Y-m-d', $nextWeek)."\n";

echo date('M-D-Y', mktime(7, 8, 2019));
echo "\n";

//date
echo date("l")."\n";
echo date("m. d. y")."\n";
?>

