<?php


namespace Quotation;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class quoteTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'q';

    public function __construct($styles = [], $selector = 'q')
    {
        parent::__construct($styles, $selector);
    }
}