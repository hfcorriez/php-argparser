<?php

$loader = require dirname(__DIR__) . '/lib/CodeGun/ArgParser.php';

$arg_parser = new \CodeGun\ArgParser();
$arg_parser->add('a', array('help' => 'a long time with he happy', 'enum' => array(
)));
$arg_parser->add(array('--long', '-l'), array('help' => 'long arguments', 'enum' => array('a', 'b')));
$args = $arg_parser->parse();

var_dump($args, $arg_parser->error());

echo $arg_parser->help();