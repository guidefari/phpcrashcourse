# Notes
- following along [Traversy media crash course](https://youtu.be/BUCiSSyIGGU)
- Using docker compose, instead of xampp
  - [here's an article I used](https://dev.to/truthseekers/setup-a-basic-local-php-development-environment-in-docker-kod) to help me get started with that
- [PHP buys lambos](https://twitter.com/taylorotwell/status/1534178479201259520)

# 01_output
- closing tags are optional, unless you have something underneath them.
this is valid
```php
<?php
  echo "Wagwan big man";
```
- you need to have semi colons 
- `print_r([1,2,3])` gives a nicely formatted output - seems cool to use `print_r()` with arrays

# 02_variables
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)

- concatenation is with a dot and not a plus

```php
echo $name . ' is '. $age . ' years old.';
```

- double quote makes it much better actually

```php
echo "$name is $age years old";

// you can also write it similar to how you would in JS
echo "${name} is ${age} years old";
```

- to create a constant, you use the `define` function
```php
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

var_dump(HOST);
var_dump(DB_NAME);

```