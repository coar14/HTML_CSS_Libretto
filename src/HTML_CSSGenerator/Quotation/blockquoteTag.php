<?php


namespace Quotation;
require_once __DIR__ . '/../HtmlStylerBase.php';


use HtmlStylerBase;

class blockquoteTag extends HtmlStylerBase
{
    protected $styles = [];
    protected $selector = 'blockquote';

    public function __construct($styles = [], $selector = 'blockquote')
    {
        parent::__construct($styles, $selector);
    }
}