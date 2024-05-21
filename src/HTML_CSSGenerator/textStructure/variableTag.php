<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class variableTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'var';

    public function __construct($styles = [], $selector = 'var')
    {
        parent::__construct($styles, $selector);
    }
}