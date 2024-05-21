<?php


namespace textStructure;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class sampleTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'samp';

    public function __construct($styles = [], $selector = 'samp')
    {
        parent::__construct($styles, $selector);
    }
}