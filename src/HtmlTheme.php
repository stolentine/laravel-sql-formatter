<?php


namespace Stolentine\LaravelSqlFormatter;


use Doctrine\SqlFormatter\HtmlHighlighter;

class HtmlTheme
{
    /**
     * @return string[]
     */
    public static function get()
    {
        return [
            HtmlHighlighter::HIGHLIGHT_QUOTE            => 'style="color: #6A8759;"', //строки зеленый
            HtmlHighlighter::HIGHLIGHT_BACKTICK_QUOTE   => 'style="color: #A9B7C6;"', //текст светло-серый
            HtmlHighlighter::HIGHLIGHT_RESERVED         => 'style="font-weight:bold;color: #CC7832;"', //операторы оранжевый
            HtmlHighlighter::HIGHLIGHT_BOUNDARY         => 'style="color: #A9B7C6;"', // операторы серый
            HtmlHighlighter::HIGHLIGHT_NUMBER           => 'style="color: #6897BB;"', //цифры голубой
            HtmlHighlighter::HIGHLIGHT_WORD             => 'style="color: #9876AA;"', //переменные (поля) фиолетовый
            HtmlHighlighter::HIGHLIGHT_ERROR            => 'style="background-color: red;"',
            HtmlHighlighter::HIGHLIGHT_COMMENT          => 'style="color: #aaa;"',
            HtmlHighlighter::HIGHLIGHT_VARIABLE         => 'style="color: orange;"',
            HtmlHighlighter::HIGHLIGHT_PRE              => 'style="color: #A9B7C6; background-color: #2B2B2B;"', // фон
        ];
    }
}