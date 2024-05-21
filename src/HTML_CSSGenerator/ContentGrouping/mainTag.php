<?php


namespace ContentGrouping;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class mainTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'main';

    public function __construct($styles = [], $selector = 'main')
    {
        parent::__construct($styles, $selector);
    }
}