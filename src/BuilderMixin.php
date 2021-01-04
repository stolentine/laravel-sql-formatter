<?php

namespace Stolentine\LaravelSqlFormatter;

use Doctrine\SqlFormatter\SqlFormatter;
use Illuminate\Database\Query\Builder;

/**
 * Class BuilderMixin
 * @mixin Builder
 */
class BuilderMixin
{
    public function _toSql()
    {
        return function () {
            ddSql($this->toSql());
        };
    }

    public function _dd()
    {
        return function () {
            ddSql($this->toSql(), $this->getBindings());
        };
    }
}
