## Intro

ArgParser is a PHP library that help you parse the CLI arguments

## Examples

```php
$arg_parser = new \Pagon\ArgParser();

// Add a short arguments and support enum type
$arg_parser->add('a', array('help' => 'a long time with he happy', 'enum' => array(
    'go' => 'do some thing with go'
)));

// Add long and short arguments
$arg_parser->add('--long|-l', array('help' => 'long arguments', 'enum' => array('a', 'b')));

// Will get the arguments you want
$args = $arg_parser->parse();

// Print the help message
echo $arg_parser->help();
```

## License 

(The MIT License)

Copyright (c) 2012 hfcorriez &lt;hfcorriez@gmail.com&gt;

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.