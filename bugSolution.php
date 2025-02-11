function foo(array $arr) {
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )