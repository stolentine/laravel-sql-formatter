<?php

use Doctrine\SqlFormatter\SqlFormatter;

if (!function_exists('ddSql')) {
    /**
     * @param string|\Illuminate\Database\Query\Builder|mixed $sql
     * @param mixed ...$dump
     * @throws Exception
     */
    function ddSql($sql, ...$dump)
    {
        if (method_exists($sql, 'toSql')) {
            $sql = $sql->toSql();
        }

        if (!is_string($sql)) {
            throw new \Exception('Expected string value');
        }

        echo formatSql($sql);

        if ($dump) {
            dump($dump);
        }

        exit(1);
    }
}

if (!function_exists('formatSql')) {
    /**
     * @param string $sql
     * @return string
     */
    function formatSql(string $sql)
    {
        return app(SqlFormatter::class)->format($sql);
    }
}