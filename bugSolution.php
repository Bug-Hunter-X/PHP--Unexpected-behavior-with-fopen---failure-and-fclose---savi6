```php
$file = fopen("somefile.txt", "r");
if ($file !== false) {
    // Process the file
    fclose($file);
} else {
    // Handle the error appropriately
    echo "Error opening file.";
}
```

This revised code explicitly checks `$file` against `false` using the strict comparison operator (`!==`). This ensures that only actual file resources are closed using `fclose()`, preventing errors.