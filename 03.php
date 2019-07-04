<?php

//課題

//1
$name = "aoi";
if($name = "aoi"){
echo "私はaoiです";
}else{
echo "aoiではありません";
}


//2
$total = 0;
echo $total;
for($i=0; $i<=10000; $i++){
  $total += $i;
}
echo $total;


//3
$fruits = array("apple","orange","banana","grape","peach");
foreach($fruits as $fruit){
  echo $fruit . ",";
}

//4【応用】

for($i = 1; $i <= 100; $i++){
  if($i % 5 ==0){
    echo $i;
  }
}