<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class definitionTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'dfn';

    public function __construct($styles = [], $selector = 'dfn')
    {
        parent::__construct($styles, $selector);
    }
}