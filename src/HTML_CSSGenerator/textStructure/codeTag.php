<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class codeTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'code';

    public function __construct($styles = [], $selector = 'code')
    {
        parent::__construct($styles, $selector);
    }
}