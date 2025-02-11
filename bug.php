function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//The bug is that when you use unset() inside a foreach loop on an array, it modifies the array structure during iteration, which can lead to unexpected results. The internal array pointer gets confused, leading to skipping elements.