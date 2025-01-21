```php
function myFunc(array $arr): int {
  foreach ($arr as $value) {
    if ($value === null) {
      return 0; // This line will always return 0 if a null is encountered
    }
    // ...rest of the function...
  }
  return 1; // This line might be unreachable due to the above return
}
```