<?php


namespace ContentGrouping;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class asideTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'aside';

    public function __construct($styles = [], $selector = 'aside')
    {
        parent::__construct($styles, $selector);
    }
}