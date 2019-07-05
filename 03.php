<?php

//課題

//1
$name = "aoi";
if($name == "kimura"){
echo "私は".$name."です";
}else{
echo $name."ではありません";
echo "\n";
}


//2
$total = 0;
for($i=0; $i<=10000; $i++){
  $total += $i;
}
echo $total;
echo "\n";


//3
$fruits = array("apple","orange","banana","grape","peach");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

//4【応用】

for($i = 1; $i <= 100; $i++){
  if($i % 5 ==0){
    echo $i;
    echo "\n";
  }
}

?>