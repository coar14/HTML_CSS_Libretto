<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class citeTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'cite';

    public function __construct($styles = [], $selector = 'cite')
    {
        parent::__construct($styles, $selector);
    }
}