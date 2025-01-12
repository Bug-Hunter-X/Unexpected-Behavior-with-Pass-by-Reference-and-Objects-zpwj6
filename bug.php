```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
processArray($numbers);
print_r($numbers); // Output: [2, 3, 4]

$objects = [new stdClass(), new stdClass()];
processArray($objects); //This will result in an error.
```