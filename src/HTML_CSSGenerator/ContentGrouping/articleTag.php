<?php


namespace ContentGrouping;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class articleTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'article';

    public function __construct($styles = [], $selector = 'article')
    {
        parent::__construct($styles, $selector);
    }
}