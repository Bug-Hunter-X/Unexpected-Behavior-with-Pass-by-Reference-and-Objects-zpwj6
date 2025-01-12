```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    if (is_numeric($value)) {
      $value++;
    } elseif (is_object($value)) {
      // Handle object increment appropriately or change the logic to not use the increment operator at all 
      // Example: Add a property or modify an existing property.
      $value->count = isset($value->count)? $value->count + 1 : 1;
    }
  }
}

$numbers = [1, 2, 3];
processArray($numbers);
print_r($numbers); // Output: [2, 3, 4]

$objects = [new stdClass(), new stdClass()];
processArray($objects);
print_r($objects); // Output: [stdClass Object ( [count] => 1 ), stdClass Object ( [count] => 1 )]
```