<?php


namespace ContentGrouping;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class footerTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'footer';

    public function __construct($styles = [], $selector = 'footer')
    {
        parent::__construct($styles, $selector);
    }
}