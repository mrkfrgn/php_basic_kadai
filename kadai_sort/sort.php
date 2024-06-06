<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      
      $nums = [15, 4, 18, 23, 10];

function sort_2way($array, $order) {
    if ($order === 'asc') {
        sort($array); 
    } elseif ($order === 'desc') {
        rsort($array); 
    } 
    return $array;
}

$sorted = sort_2way($nums, 'asc');
echo "昇順にソートします。<br> " ;
foreach ($sorted as $value){
  echo $value . "<br>";
}


$r_sorted = sort_2way($nums, 'desc');
echo "降順にソートします。<br>  ";
foreach ($r_sorted as $value){
  echo $value . "<br>";
}

      ?>
  </p>
</body>
</html>