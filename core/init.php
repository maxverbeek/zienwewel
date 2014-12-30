<?php
spl_autoload_register(function($class){
	require_once 'core/class/'.$class.'.php';
});

$name = 'Zien we wel';

$db = new Database('summovie', 'root', 'root');

