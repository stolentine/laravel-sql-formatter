<?php

require __DIR__ . '/../vendor/autoload.php';
use Stolentine\LaravelSqlFormatter\LaravelSqlFormatterServiceProvider;

$provider = new LaravelSqlFormatterServiceProvider('app');
$provider->boot();
