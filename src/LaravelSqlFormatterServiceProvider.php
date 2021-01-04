<?php

namespace Stolentine\LaravelSqlFormatter;

use Doctrine\SqlFormatter\CliHighlighter;
use Doctrine\SqlFormatter\HtmlHighlighter;
use Doctrine\SqlFormatter\SqlFormatter;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class LaravelSqlFormatterServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(SqlFormatter::class, function ($app) {
            $highlighter = PHP_SAPI === 'cli'
                ? new CliHighlighter()
                : new HtmlHighlighter(HtmlTheme::get());

            return new SqlFormatter($highlighter);
        });

        Builder::mixin(new BuilderMixin());
    }
}