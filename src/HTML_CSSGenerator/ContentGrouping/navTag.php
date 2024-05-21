<?php


namespace ContentGrouping;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class navTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'nav';

    public function __construct($styles = [], $selector = 'nav')
    {
        parent::__construct($styles, $selector);
    }
}
