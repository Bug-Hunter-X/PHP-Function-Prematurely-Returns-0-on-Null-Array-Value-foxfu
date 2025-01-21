# PHP Function Prematurely Returns 0 on Null Array Value

This repository demonstrates a common error in PHP functions that handle arrays containing null values.

The `myFunc` function is designed to process an array, but it prematurely returns 0 if a null value is encountered, potentially leading to incorrect results and preventing the execution of the rest of the function's logic. The solution provided demonstrates a more robust way to handle null values within the array.