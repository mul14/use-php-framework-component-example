<?php

require __DIR__.'/vendor/autoload.php';

use Cake\Utility\Inflector;

var_dump( Inflector::pluralize('Mustache') ); // Mustaches
var_dump( Inflector::pluralize('Person') );   // People
