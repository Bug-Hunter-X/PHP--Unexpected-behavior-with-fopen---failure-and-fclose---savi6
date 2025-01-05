```php
$file = fopen("somefile.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
}
```

This code has a subtle bug.  If `fopen()` fails (e.g., the file doesn't exist), it returns `false`.  The `if ($file)` check will pass because `false` is considered truthy in this context. The code proceeds to `fclose($file)`, which tries to close a non-resource, resulting in a warning or error (depending on PHP's error reporting level).