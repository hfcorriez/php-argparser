<?php

$loader = require dirname(__DIR__) . '/lib/CodeGun/ArgParser.php';

$arg_parser = new \CodeGun\ArgParser();
$arg_parser->add('a', array('help' => 'a long time with he happy', 'enum' => array(
    'go' => 'do some thing with go'
)));
$arg_parser->add('--long|-l', array('help' => 'long arguments', 'enum' => array('a', 'b')));
$args = $arg_parser->parse();
echo $arg_parser->help();