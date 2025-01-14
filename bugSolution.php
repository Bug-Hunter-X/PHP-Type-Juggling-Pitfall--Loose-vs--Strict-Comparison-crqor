The solution involves consistently using strict comparison (`===`) unless type juggling is explicitly desired:
```php
<?php
$a = '10';
$b = 10;

if ($a === $b) {
  echo '$a and $b are identical (Strict Comparison)';
} else {
  echo '$a and $b are not identical (Strict Comparison)';
}

//Type Casting for explicit comparison
if ((int)$a === $b){
    echo '\n$a and $b are equal after type casting';
} else {
    echo '\n$a and $b are not equal after type casting';
}
?>
```
Using strict comparison (`===`) ensures that both the value and type match before considering them equal.  For specific cases when you might want to compare numeric values regardless of type, you can explicitly cast using `(int)`, `(float)`, etc., before comparison.