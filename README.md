# PHP: fopen() and fclose() Error Handling
This example demonstrates a common yet subtle error in PHP file handling. The `fopen()` function can return `false` if the file operation fails, but the following code treats `false` as truthy leading to errors when using `fclose()`.

## Bug Description:
The `fopen()` function should be checked explicitly for `false` return to handle file opening errors correctly.