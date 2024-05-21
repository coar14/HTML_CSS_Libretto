<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class abbreviationTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'abbr';

    public function __construct($styles = [], $selector = 'abbr')
    {
        parent::__construct($styles, $selector);
    }
}