<?php

$loader = require dirname(__DIR__) . '/lib/Pagon/ArgParser/ArgParser.php';

$arg_parser = new \Pagon\ArgParser();
$arg_parser->add('a', array('help' => 'a long time with he happy', 'enum' => array(
    'test' => 'dd', 'aaa' => 'ddd'
)));
$arg_parser->add(array('--long', '-l'), array('help' => 'long arguments', 'enum' => array('a', 'b')));
$args = $arg_parser->parse();

var_dump($args, $arg_parser->error());