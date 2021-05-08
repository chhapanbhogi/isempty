# **isempty()** function that takes multiple parameters 

A nifty little function that can take multiple parameters to check if they are empty. It returns **true** if any one of the parameters is empty and **false** if none are empty i.e. `empty()` function functionality but with multiple parameters. Inspired from the `isset()` function.

## Usage

``` bash
if (isempty($var1, $var2, $var 3)) {
    // code
}
```
To use this function globally you can add the absolute path of this php file in php.ini file
`auto_prepend_file = "/path/to/isempty.php"`
or can add it in .htaccess
`php_value auto_prepend_file "/path/to/isempty.php"`
or can use it at the entry point for any framework.
