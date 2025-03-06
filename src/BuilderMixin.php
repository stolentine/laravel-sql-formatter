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
    public function ddSql()
    {
        return function () {
            ddSql($this->toSql(), $this->getBindings());
        };
    }
}
